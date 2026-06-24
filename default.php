<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Notes - Secure, Self-Destructing Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0a0f1d;
            --bg-card: #121829;
            --text-main: #ffffff;
            --text-muted: #8fa0dd;
            --accent-cyan: #00f2fe;
            --accent-purple: #9b51e0;
            --grad-primary: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
        }

        /* Navbar Styling */
        .navbar {
            background-color: rgba(10, 15, 29, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
            background: var(--grad-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            color: var(--text-muted) !important;
            transition: color 0.2s;
        }

        .nav-link:hover {
            color: var(--text-main) !important;
        }

        /* Hero / Header Section */
        .hero-section {
            padding: 80px 0 40px 0;
            text-align: center;
            background: radial-gradient(circle at center, rgba(0, 242, 254, 0.05) 0%, transparent 70%);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero-section p {
            color: var(--text-muted);
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px auto;
        }

        /* Section Layouts */
        .section-title {
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--grad-primary);
            border-radius: 2px;
        }

        .center-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Feature Cards */
        .feature-box {
            background-color: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            transition: transform 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* Use Cases Grid */
        .use-case-card {
            background-color: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 20px;
            height: 100%;
        }

        .use-case-card h4 {
            font-size: 1.1rem;
            color: var(--accent-cyan);
            margin-bottom: 10px;
        }

        /* Text Styling */


        .use-case-card>.text-muted {
            color: #ffffff !important;
        }

        .foot-text {
            color: var(--text-muted);
        }

        /* Code & Technical Blocks */
        code {
            color: #ff79c6;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.9em;
        }

        pre {
            background-color: #070b14;
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 20px;
            color: #f8f8f2;
        }

        .tech-badge {
            background-color: var(--bg-card);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-main);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin: 5px;
        }

        /* Footer */
        footer {
            background-color: #060912;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding: 30px 0;
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">🔑 SECRETNOT.ES</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#use-cases">Use Cases</a></li>
                    <li class="nav-item"><a class="nav-link" href="#installation">Installation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tech-stack">Tech Stack</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/ProfJordan/secret-note"
                            target="_blank">GitHub</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <h1>Secret Notes</h1>
            <p>A secure web application designed to create secure, self-destructive notes that automatically erase after
                being read. Perfect for sending sensitive information that you don't want to remain accessible
                indefinitely.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#installation" class="btn btn-outline-light px-4 py-2">Get Started</a>
                <a href="https://github.com/ProfJordan/secret-note" target="_blank" class="btn btn-primary px-4 py-2"
                    style="background: var(--grad-primary); border: none; color: #000; font-weight: 600;">View
                    Repository</a>
            </div>
        </div>
    </header>

    <section id="features" class="py-5">
        <div class="container">
            <h2 class="section-title text-center center-title mb-5">Features</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">💥</div>
                        <h3>Self-Destructive Notes</h3>
                        <p>Each note is destroyed immediately after it is read, ensuring your sensitive information
                            doesn't stay online longer than necessary.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">🔑</div>
                        <h3>Encryption</h3>
                        <p>Customizable encryption settings allow you to set a unique salt for each note, enhancing
                            security.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">✨</div>
                        <h3>Ease of Use</h3>
                        <p>A simple interface for quickly creating and sharing secure notes with your intended
                            recipients seamlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="use-cases" class="py-5 rgba-white-01">
        <div class="container">
            <h2 class="section-title mb-4">Practical Use Cases</h2>
            <p class=" mb-5">Sending secret notes can be incredibly useful in various contexts where privacy and
                confidentiality are paramount:</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>🔒 Personal Info</h4>
                        <p class="small text-muted">Sharing sensitive details like passwords, PINs, or recovery access
                            codes with trusted family members safely.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>💼 Business Environments</h4>
                        <p class="small text-muted">Exchanging contract details, corporate negotiation points, or HR
                            actions without leaving an accidental leak window.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>📰 Journalism & Whistleblowing</h4>
                        <p class="small text-muted">Exchanging classified elements with anonymous sources to ensure
                            identity safety without leaving lingering logs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>⚖️ Legal Communications</h4>
                        <p class="small text-muted">Attorneys exchanging time-sensitive data with clients where
                            verification is needed but records must remain clear.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>🛠️ Tech & Security</h4>
                        <p class="small text-muted">IT managers provisioning temporary administrative system access
                            credentials that shouldn't be saved long term.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="use-case-card">
                        <h4>🏥 Healthcare Providers</h4>
                        <p class="small text-muted">Transmitting regulatory compliant personal health indexes securely
                            to patients without leaving lingering cached records.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="installation" class="py-5">
        <div class="container m-max-700">
            <h2 class="section-title mb-4">Local Installation</h2>
            <p>To set up the <em>Secret Note</em> app on your local environment, run the following setup workflow
                commands:</p>

            <pre><code># 1. Clone the repository to your local machine:
git clone https://github.com/ProfJordan/secret-note.git

# 2. Install dependencies:
pip install -r requirements.txt

# 3. Initialize the database:
python db-setup.py

# 4. Start the application:
flask run</code></pre>

            <h3 class="h5 mt-4 mb-3 text-info">Usage Note:</h3>
            <p class="small">Simply visit the main app routing block, enter your message payload, and optionally provide
                a custom salt string variable. Submitting the dynamic application form will output an exact unique URL
                link for your intended recipient.</p>
        </div>
    </section>

    <section id="tech-stack" class="py-5">
        <div class="container text-center">
            <h2 class="section-title center-title mb-4">Built With</h2>
            <div class="mt-2">
                <span class="tech-badge">🐍 Python</span>
                <span class="tech-badge">🌶️ Flask</span>
                <span class="tech-badge">🛠️ Cryptography (Fernet)</span>
                <span class="tech-badge">🗄️ SQLite3</span>
                <span class="tech-badge">🎨 Bootstrap CSS</span>
                <span class="tech-badge">🌐 HTML5</span>
            </div>
        </div>
    </section>

    <footer>
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div class="foot-text small">
                &copy; 2024-2026 Secret Notes Project, All rights reserved.<br />Maintained by <a
                    href="https://www.github.com/ProfJordan" target="_blank" class="m-0 text-white">@ProfJordan</a> / <a
                    href="https://www.pinebeecreative.com" target="_blank" class="m-0 text-white">Pinebee Creative</a>.
            </div>
            <div class="small foot-text">
                Project released under <br /><a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank"
                    class="m-0 text-white">CC BY-SA 4.0 License</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>