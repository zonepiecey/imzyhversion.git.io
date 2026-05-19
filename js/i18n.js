(function (global) {
  "use strict";

  var STORAGE_KEY = "lumi-site-language";
  var DEFAULT_LANGUAGE = "en";
  var locales = {};
  var currentLanguage = DEFAULT_LANGUAGE;

  function getPath(obj, key) {
    if (!obj || !key) return undefined;
    var parts = key.split(".");
    var value = obj;
    for (var i = 0; i < parts.length; i++) {
      if (value == null || typeof value !== "object") return undefined;
      value = value[parts[i]];
    }
    return typeof value === "string" ? value : undefined;
  }

  function registerLocale(language, messages) {
    locales[language] = messages;
  }

  function translate(key, language) {
    language = language || currentLanguage;
    if (language === DEFAULT_LANGUAGE) return undefined;
    return getPath(locales[language], key);
  }

  function storeDefault(el, prop, value) {
    var attr = "i18nDefault" + prop.charAt(0).toUpperCase() + prop.slice(1);
    if (el.dataset[attr] === undefined) {
      el.dataset[attr] = value;
    }
    return el.dataset[attr];
  }

  function applyToElement(el, language) {
    var key = el.getAttribute("data-i18n");
    if (!key) return;

    var mode = el.getAttribute("data-i18n-mode") || "text";
    var prop = mode === "html" ? "innerHTML" : "textContent";
    var currentValue = el[prop];

    if (language === DEFAULT_LANGUAGE) {
      if (el.dataset.i18nDefaultInnerHTML !== undefined && mode === "html") {
        el.innerHTML = el.dataset.i18nDefaultInnerHTML;
      } else if (el.dataset.i18nDefaultTextContent !== undefined) {
        el.textContent = el.dataset.i18nDefaultTextContent;
      } else {
        storeDefault(el, prop, currentValue);
      }
      return;
    }

    storeDefault(el, prop, currentValue);
    var translated = translate(key, language);
    if (translated !== undefined) {
      el[prop] = translated;
    }
  }

  function applyAttributes(el, language) {
    var attrSpec = el.getAttribute("data-i18n-attr");
    if (!attrSpec) return;

    attrSpec.split(";").forEach(function (pair) {
      var parts = pair.split(":").map(function (s) { return s.trim(); });
      if (parts.length !== 2) return;

      var attrName = parts[0];
      var key = parts[1];
      var storageKey = "i18nDefault" + attrName.charAt(0).toUpperCase() + attrName.slice(1);

      if (language === DEFAULT_LANGUAGE) {
        if (el.dataset[storageKey] !== undefined) {
          el.setAttribute(attrName, el.dataset[storageKey]);
        }
        return;
      }

      if (el.dataset[storageKey] === undefined) {
        el.dataset[storageKey] = el.getAttribute(attrName) || "";
      }

      var translated = translate(key, language);
      if (translated !== undefined) {
        el.setAttribute(attrName, translated);
      }
    });
  }

  function applyLanguage(language) {
    currentLanguage = language || DEFAULT_LANGUAGE;
    document.documentElement.lang = currentLanguage === "zh-Hans" ? "zh-Hans" : "en";

    document.querySelectorAll("[data-i18n]").forEach(function (el) {
      applyToElement(el, currentLanguage);
    });

    document.querySelectorAll("[data-i18n-attr]").forEach(function (el) {
      applyAttributes(el, currentLanguage);
    });

    document.querySelectorAll(".language-switcher button").forEach(function (button) {
      button.classList.toggle("is-active", button.dataset.lang === currentLanguage);
      button.setAttribute("aria-pressed", button.dataset.lang === currentLanguage ? "true" : "false");
    });
  }

  function getSavedLanguage() {
    try {
      return localStorage.getItem(STORAGE_KEY);
    } catch (error) {
      return null;
    }
  }

  function saveLanguage(language) {
    try {
      localStorage.setItem(STORAGE_KEY, language);
    } catch (error) {
      // Storage may be unavailable in private browsing.
    }
  }

  function createSwitcher() {
    if (document.querySelector(".language-switcher")) return;

    var switcher = document.createElement("div");
    switcher.className = "language-switcher";
    switcher.setAttribute("aria-label", "Language switcher");
    switcher.innerHTML =
      '<button type="button" data-lang="en">EN</button>' +
      '<span aria-hidden="true">/</span>' +
      '<button type="button" data-lang="zh-Hans">简体中文</button>';

    switcher.addEventListener("click", function (event) {
      var button = event.target.closest("button[data-lang]");
      if (!button) return;
      var language = button.dataset.lang;
      saveLanguage(language);
      applyLanguage(language);
    });

    document.body.appendChild(switcher);
  }

  function init() {
    if (global.LUMI_I18N) {
      Object.keys(global.LUMI_I18N).forEach(function (lang) {
        registerLocale(lang, global.LUMI_I18N[lang]);
      });
    }

    createSwitcher();
    applyLanguage(getSavedLanguage() || DEFAULT_LANGUAGE);
  }

  global.LumiI18n = {
    init: init,
    t: translate,
    applyLanguage: applyLanguage,
    registerLocale: registerLocale,
    getLanguage: function () { return currentLanguage; },
    STORAGE_KEY: STORAGE_KEY,
    DEFAULT_LANGUAGE: DEFAULT_LANGUAGE
  };
})(window);
