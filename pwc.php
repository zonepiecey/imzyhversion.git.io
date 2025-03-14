<?php  
include "header.php";
?>

<body onload="PageLoader()">
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebarWrapper">
        </div>
        
        <script>
        $(function(){
          $("#sidebarWrapper").load("sidebar.html");
        });
        </script>

        <div class="prooverlay"></div>

        <!-- /#sidebarWrapper -->
        <div id="loader"><span class="loader-inner"></span></div>

        <!-- Page Content -->
        <div id="page-content-wrapper" style="display:none;">

            <div class="fixheader">
                <p class="header-title">PWC</p>
            </div>

                <div class="content-section">
                    <h1>Redesigning the Engagement Manager Dashboard for PwC Talent Exchange</h1>
                    <p class="p">In 2023, PwC Talent Exchange's Engagement Manager Dashboard was becoming less efficient as the platform scaled. Engagement Managers were struggling to keep up with an increasing volume of roles, talent, and contractor engagements. The existing dashboard, although functional, was becoming overwhelming, with key data scattered across multiple sections and no clear focus on urgency.</p>

                    <p class="p">As the UX Design Lead, I was tasked with leading the redesign of this dashboard to make it more intuitive, actionable, and scalable. This project was not just about improving the user interface—it was about creating a strategic tool for managing a growing number of engagements while leading the cross-functional team through the entire process.</p>

                    <img src="imgs/pwc/cover.jpg" alt="" class="proimg">
                    <hr>

                    <h2>My Role</h2>
                    <span class="tag"><div class="tag-text">Leadership</div></span>
                    <span class="tag"><div class="tag-text">UX Strategy</div></span>
                    <span class="tag"><div class="tag-text">Stakeholder Management</div></span>
                    <span class="tag"><div class="tag-text">User Research</div></span>
                    <span class="tag"><div class="tag-text">Design System</div></span>
                    <span class="tag"><div class="tag-text">Prototyping</div></span>
                    <span class="tag"><div class="tag-text">Implementation</div></span>

                    <ul>
                        <li>Leadership: I led the design team, collaborated with stakeholders (Product, Engineering, and Business), and made high-level decisions on design strategy.</li>
                        <li>UX Strategy: I defined the overall design vision, prioritized features, and worked closely with the engineering team to ensure feasibility.</li>
                        <li>Collaboration: Worked with product managers, business stakeholders, and engineers to align user needs with business objectives.</li>
                    </ul>
                    <hr>

                    <h2>Problem Definition & Challenges</h2>
                    <p>The Engagement Manager Dashboard was designed for a time when the volume of contractors and roles was relatively low. With the rapid expansion of PwC Talent Exchange, Engagement Managers were facing several key challenges:</p>
                    
                    <h3>Key Challenges:</h3>
                    <ul>
                        <li>Overwhelming Data: Too much data on one screen with no clear way to prioritize tasks.</li>
                        <li>Lack of Actionable Insights: Important metrics were hidden behind layers of information. Managers needed a dashboard that highlighted what was urgent and actionable.</li>
                        <li>Manual Workflows: A lot of manual effort went into tracking engagement statuses, approvals, and onboarding.</li>
                    </ul>

                    <h3>Stakeholder Expectations:</h3>
                    <ul>
                        <li>Business Leaders wanted a solution that would improve efficiency and give them real-time insights to make data-driven decisions.</li>
                        <li>Engagement Managers needed a tool that would reduce the time spent on administrative tasks and provide a clear overview of their talent and roles.</li>
                        <li>Engineering was concerned with the technical feasibility of delivering a high-performing dashboard at scale.</li>
                    </ul>
                    <img src="imgs/pwc/challenges.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Research & Discovery</h2>
                    <h3>User Research:</h3>
                    <p>We started by talking to Engagement Managers directly to understand their pain points:</p>

                    <h3>Interviews & Surveys:</h3>
                    <p>We conducted 1:1 interviews and sent surveys to a wide range of users across different regions. Common pain points included not being able to see the status of projects and roles in one place and having to navigate through multiple pages to get basic information.</p>

                    <h3>Behavioral Analytics:</h3>
                    <p>We analyzed usage data to see where engagement was highest and where managers were spending the most time. We found that users spent too much time manually checking role statuses and engagement details.</p>

                    <h3>Competitive Analysis:</h3>
                    <p>We also looked at other talent management platforms, like Upwork Enterprise and Toptal, to understand how they structured their dashboards and how they handled high volumes of data.</p>
                    <img src="imgs/pwc/research.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Design Process & Strategy</h2>
                    <h3>Defining the Design Vision:</h3>
                    <p>Based on research and feedback, we created the following vision for the dashboard:</p>
                    <ul>
                        <li>Simplify Information: Prioritize data based on urgency and business value, focusing on actionable insights.</li>
                        <li>Make it Actionable: Provide easy-to-use tools to track, approve, and manage roles without clicking through multiple screens.</li>
                        <li>Improve Efficiency: Reduce the number of steps it took to accomplish common tasks.</li>
                    </ul>

                    <h3>Wireframing & Prototyping:</h3>
                    <p>Low-Fidelity Wireframes: We created initial wireframes to test different layouts. The key here was focusing on clearly displaying urgent tasks—such as approvals, expiring contracts, and onboarding status—front and center.</p>

                    <p>Mid-Fidelity Prototypes: We moved on to creating interactive prototypes using Figma. The interactive elements allowed us to test workflows and iterate quickly.</p>

                    <h3>Iterative Testing:</h3>
                    <p>We tested the designs with real users, including Engagement Managers from different regions:</p>
                    <ul>
                        <li>Usability Testing: We ran multiple rounds of testing, gathering feedback after each session. We iterated on design based on user pain points and areas of confusion.</li>
                        <li>A/B Testing: We tested different configurations of the widgets (like placement and information hierarchy) to see which would result in the highest engagement.</li>
                    </ul>
                    <img src="imgs/pwc/process.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Leadership & Team Management</h2>
                    <h3>Stakeholder Management:</h3>
                    <p>Managing stakeholder expectations was crucial throughout the project. Here's how I led the team and stakeholders:</p>

                    <h3>Setting Clear Expectations from the Start:</h3>
                    <p>In the kickoff meeting, I clearly defined what we were trying to achieve with the redesign, aligning business goals (increased efficiency) with user needs (reduced admin time). I also explained that the redesign would be iterative, with continuous feedback loops built in.</p>

                    <h3>Collaborative Decision-Making:</h3>
                    <p>As design and engineering were tightly integrated, I ensured that stakeholders were involved early in the decision-making process. Every two weeks, I held "Deep Dive" sessions where we reviewed design progress, prioritized features, and addressed any concerns. These sessions were collaborative, with product managers, engineers, and business leaders providing input. I used data-driven storytelling to demonstrate how design decisions aligned with business outcomes, helping everyone stay on the same page.</p>

                    <h3>Managing Scope Creep:</h3>
                    <p>As new feature requests came in, I kept a clear record of what could be added in the future and what was crucial for the first launch. I communicated the impact of scope changes on timeline and resources, ensuring that everyone understood the trade-offs.</p>
                    <img src="imgs/pwc/leadership.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Final Design & Implementation</h2>
                    <h3>Key Features:</h3>
                    <ul>
                        <li>My Talent Exchange Widget: Displays key stats—roles, engaged talent, and total active engagements—all in one place. Clickable numbers take users to detailed views.</li>
                        <li>T&E Approvals Widget: Highlights overdue approvals and total approvals in progress. A quick glance helps managers act on what's urgent.</li>
                        <li>Engagements Ending Widget: Shows a countdown of upcoming engagements with color-coded urgency (today, in 5 days, in 15 days).</li>
                        <li>Onboarding Widget: Visualizes the status of onboarding for new hires, categorizing them as "in progress," "at risk," or "delayed."</li>
                    </ul>
                    <img src="imgs/pwc/final.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Results & Impact</h2>
                    <p>The redesign led to significant improvements:</p>
                    <ul>
                        <li><span style="color:black; font-weight:600">35%</span> Reduction in Task Completion Time: Engagement Managers can now complete common tasks in less time, thanks to streamlined workflows.</li>
                        <li><span style="color:black; font-weight:600">50%</span> Faster Role Assignments: The action-driven design allowed managers to quickly assign contractors to roles without additional navigation.</li>
                        <li><span style="color:black; font-weight:600">85%</span> Adoption Rate in the first 3 months, demonstrating that the dashboard was highly embraced by users.</li>
                        <li><span style="color:black; font-weight:600">20%</span> Improvement in User Satisfaction as measured by post-launch surveys, with users praising the clarity and actionability of the new design.</li>
                    </ul>
                    <img src="imgs/pwc/results.jpg" alt="" class="proimg">
                    <hr>

                    <h2>Reflections & Next Steps</h2>
                    <h3>What Went Well?:</h3>
                    <ul>
                        <li>Collaborative Leadership: Engaging all stakeholders early and often helped manage expectations and prevent misalignments.</li>
                        <li>User-Centered Design: Continuous feedback from users allowed us to fine-tune the design and deliver exactly what was needed.</li>
                        <li>Iterative Delivery: By breaking down the project into phases, we were able to deliver quick wins while laying the foundation for future enhancements.</li>
                    </ul>

                    <h3>Challenges & Future Directions:</h3>
                    <p>Handling Complex Requests: Balancing long-term vision with immediate needs was challenging. Moving forward, we plan to integrate AI-driven recommendations for talent matching and enhanced predictive analytics for engagement forecasting.</p>
                    <img src="imgs/pwc/next-steps.jpg" alt="" class="proimg">

                    <div id="footer">
                    </div>
                    <script>
                        $(function(){
                        $("#footer").load("footer.html");
                        });
                    </script>
                </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <script>
    </script>
    <!-- /#wrapper -->
</body>
</html>