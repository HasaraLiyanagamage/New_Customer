<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka Customs - Electronic Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: white;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 0 20px 30px;
            border-bottom: 1px solid #34495e;
        }

        .logo img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            background: #3498db;
            border-radius: 4px;
        }

        .logo-text {
            font-weight: bold;
            font-size: 14px;
        }

        .nav-section {
            margin: 20px 0;
        }

        .nav-title {
            padding: 10px 20px;
            font-size: 12px;
            color: #bdc3c7;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .nav-item {
            display: block;
            padding: 12px 20px;
            color: #ecf0f1;
            text-decoration: none;
            font-size: 13px;
            border-left: 3px solid transparent;
            transition: all 0.3s;
        }

        .nav-item:hover, .nav-item.active {
            background: #34495e;
            border-left-color: #3498db;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background: #ecf0f1;
        }

        .header {
            background: white;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 600;
        }

        .user-info {
            font-size: 14px;
            color: #7f8c8d;
        }

        .form-container {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .form-tabs {
            display: flex;
            background: #34495e;
        }

        .tab-button {
            padding: 15px 25px;
            background: transparent;
            border: none;
            color: #bdc3c7;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.3s;
        }

        .tab-button.active {
            background: #3498db;
            color: white;
        }

        .form-section {
            padding: 25px;
        }

        .section-header {
            background: #2c3e50;
            color: white;
            padding: 12px 20px;
            margin: -25px -25px 25px -25px;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .required-info {
            font-size: 12px;
            color: #e74c3c;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 13px;
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .required {
            color: #e74c3c;
        }

        .form-input, .form-select {
            padding: 10px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-item input[type="checkbox"] {
            margin: 0;
        }

        .checkbox-item label {
            font-size: 13px;
            color: #2c3e50;
            cursor: pointer;
        }

        .file-upload-group {
            display: grid;
            gap: 15px;
        }

        .file-upload-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            background: #f8f9fa;
        }

        .file-label {
            flex: 1;
            font-size: 13px;
            color: #2c3e50;
        }

        .file-input {
            display: none;
        }

        .file-choose-btn {
            padding: 8px 15px;
            background: #95a5a6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .file-upload-btn {
            padding: 8px 15px;
            background: #1abc9c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .file-view-btn {
            padding: 8px 15px;
            background: #f39c12;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .submit-button {
            background: #1abc9c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            float: right;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .submit-button:hover {
            background: #16a085;
        }

        .notice-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .notice-title {
            font-weight: bold;
            margin-bottom: 5px;
            color: #856404;
        }

        .notice-text {
            font-size: 13px;
            color: #856404;
        }

        .radio-group {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-top: 5px;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                order: 2;
            }
            
            .main-content {
                order: 1;
            }

    .checkbox-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }
        </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar (commented out for now) -->
        <!--
        <div class="sidebar">
            <div class="logo">
                <div style="width: 30px; height: 30px; background: #3498db; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">🇱🇰</div>
                <div class="logo-text">Sri Lanka Customs<br><small>ICT Directorate</small></div>
            </div>
            
            <div class="nav-section">
                <div class="nav-title">Navigation</div>
                <a href="#" class="nav-item active">📄 Application</a>
                <a href="#" class="nav-item">📥 Downloads</a>
                <a href="#" class="nav-item">📋 GS Form 01</a>
                <a href="#" class="nav-item">📋 GS Form 02</a>
                <a href="#" class="nav-item">❓ What Should I Fill/Upload (Mandatory Fields)</a>
            </div>
            
            <div class="nav-section">
                <div class="nav-title">📚 Manuals</div>
                <a href="#" class="nav-item">Video Tutorial - Sinhala</a>
                <a href="#" class="nav-item">Video Tutorial - Tamil</a>
                <a href="#" class="nav-item">Video Tutorial - English</a>
                <a href="#" class="nav-item">Error-Free Submission</a>
                <a href="#" class="nav-item">Frequently Asked Questions</a>
            </div>
            
            <div class="nav-section">
                <a href="#" class="nav-item">📞 Contact Us</a>
                <a href="#" class="nav-item">👤 Profile</a>
            </div>
        </div>
        -->

        <div class="main-content">
            <div class="header">
                <div class="page-title">Electronic Registration of Traders & Logistics Operators</div>
                <div class="user-info">Welcome, A H M JINADASA</div>
            </div>

            <div class="form-container">
                <div class="form-tabs">
                    <button class="tab-button active" onclick="showTab('basic')">Basic</button>
                    <button class="tab-button" onclick="showTab('owner')">Owner</button>
                    <button class="tab-button" onclick="showTab('attachment')">Attachment</button>
                    <button class="tab-button" onclick="showTab('declaration')">Declaration</button>
                </div>

                <!-- Basic Tab -->
                <div id="basic-tab" class="tab-content active">
                    <div class="form-section">
                        <div class="section-header">
                            <span>Business / Individual Details</span>
                            <span class="required-info">(Fields marked with * are required)</span>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Name of Business / Individual Name <span class="required">*</span></label>
                                <input type="text" class="form-input" value="A H M JINADASA">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Type of Business <span class="required">*</span></label>
                                <select class="form-select">
                                    <option>Non Business Individual (Motor Vehicle)</option>
                                    <option>Business Individual</option>
                                    <option>Private Company</option>
                                    <option>Public Company</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">If Other, Please Specify</label>
                            <input type="text" class="form-input">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Principal Activities carried out with Customs <span class="required">*</span></label>
                            <div class="checkbox-group">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="importer">
                                    <label for="importer">Importer</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="exporter">
                                    <label for="exporter">Exporter</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="clearing-agent">
                                    <label for="clearing-agent">Clearing Agent (CHA)</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="courier">
                                    <label for="courier">Courier Service</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="vessel-agent">
                                    <label for="vessel-agent">Vessel Agent</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="upr-agent">
                                    <label for="upr-agent">UPR Clearing Agent</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="door-service">
                                    <label for="door-service">Door to Door Service</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="freight">
                                    <label for="freight">Freight Forwarder/NVOCC</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="eoi">
                                    <label for="eoi">EOI</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="permit">
                                    <label for="permit">Permit</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="one-time" checked>
                                    <label for="one-time">One Time Importer/Exporter</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="transporter">
                                    <label for="transporter">Transporter</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="bank">
                                    <label for="bank">Bank</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="gov-education">
                                    <label for="gov-education">Gov.Education Institute</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="gov-authorities">
                                    <label for="gov-authorities">Gov.Authorities / Institutes /Boards /Corporations</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="gov-departments">
                                    <label for="gov-departments">Gov. Departments / Ministries</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="foreign-missions">
                                    <label for="foreign-missions">Foreign Missions</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="religious">
                                    <label for="religious">Religious Institutes</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="ngo">
                                    <label for="ngo">NGO</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="port-city">
                                    <label for="port-city">Port City / Other Econ. Zone</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="gov-projects">
                                    <label for="gov-projects">Gov. Projects</label>
                                </div>
                                <div class="checkbox-item">
                                    <input type="checkbox" id="other">
                                    <label for="other">Other</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">If Other, Please Specify</label>
                            <input type="text" class="form-input">
                        </div>
                    </div>

                    <!-- Contact Information Section -->
                    <div class="form-section">
                        <div class="section-header">
                            <span>Contact Information</span>
                            <span class="required-info">(Fields marked with * are required)</span>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Address Line 1 <span class="required">*</span></label>
                                <input type="text" class="form-input" value="123, Main Street">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address Line 2</label>
                                <input type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">City <span class="required">*</span></label>
                                <input type="text" class="form-input" value="Colombo">
                            </div>

                            <div class="form-group">
                                <label class="form-label">District <span class="required">*</span></label>
                                <select class="form-select">
                                    <option>Select District</option>
                                    <option selected>Colombo</option>
                                    <option>Gampaha</option>
                                    <option>Kalutara</option>
                                    <option>Kandy</option>
                                    <option>Matale</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Galle</option>
                                    <option>Matara</option>
                                    <option>Hambantota</option>
                                    <option>Jaffna</option>
                                    <option>Kilinochchi</option>
                                    <option>Mannar</option>
                                    <option>Vavuniya</option>
                                    <option>Mullaitivu</option>
                                    <option>Batticaloa</option>
                                    <option>Ampara</option>
                                    <option>Trincomalee</option>
                                    <option>Kurunegala</option>
                                    <option>Puttalam</option>
                                    <option>Anuradhapura</option>
                                    <option>Polonnaruwa</option>
                                    <option>Badulla</option>
                                    <option>Monaragala</option>
                                    <option>Ratnapura</option>
                                    <option>Kegalle</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Postal Code <span class="required">*</span></label>
                                <input type="text" class="form-input" value="00100">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Telephone <span class="required">*</span></label>
                                <input type="tel" class="form-input" value="0112345678">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Mobile Number <span class="required">*</span></label>
                                <input type="tel" class="form-input" value="0712345678">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email Address <span class="required">*</span></label>
                                <input type="email" class="form-input" value="ahm.jinadasa@example.com">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Website (if any)</label>
                                <input type="url" class="form-input" placeholder="https://">
                            </div>
                        </div>
                    </div>

                    <!-- Tax Information Section -->
                    <div class="form-section">
                        <div class="section-header">
                            <span>Tax Information</span>
                            <span class="required-info">(Fields marked with * are required)</span>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">TIN (Tax Identification Number) <span class="required">*</span></label>
                                <input type="text" class="form-input" placeholder="e.g. 123456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label">VAT Registration Number</label>
                                <input type="text" class="form-input" placeholder="e.g. 123456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label">VAT Registration Date</label>
                                <input type="date" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">SVAT Registration Number</label>
                                <input type="text" class="form-input" placeholder="e.g. 123456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label">SVAT Registration Date</label>
                                <input type="date" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">EPF/ETF Registration Number</label>
                                <input type="text" class="form-input" placeholder="e.g. 123456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label">NBT Registration Number</label>
                                <input type="text" class="form-input" placeholder="e.g. 123456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label">NBT Registration Date</label>
                                <input type="date" class="form-input">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="section-header">
                            <span>Business Registration Details</span>
                            <span class="required-info">(Fields marked with * are required)</span>
                        </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Business Registration Number <span class="required">*</span></label>
                                <input type="text" class="form-input" placeholder="e.g. BN123456">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Date of Incorporation/Registration <span class="required">*</span></label>
                                <input type="date" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Business Registration Type <span class="required">*</span></label>
                                <select class="form-select">
                                    <option value="">Select Registration Type</option>
                                    <option>Private Limited Company</option>
                                    <option>Public Limited Company</option>
                                    <option>Partnership</option>
                                    <option>Sole Proprietorship</option>
                                    <option>Branch of a Foreign Company</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">If Other, Please Specify</label>
                                <input type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Business Registration Certificate</label>
                                <div class="file-upload">
                                    <input type="file" id="br-certificate" accept=".pdf" style="display: none;">
                                    <button type="button" class="btn-upload" onclick="document.getElementById('br-certificate').click()">Choose File</button>
                                    <span class="file-name">No file chosen</span>
                                    <button type="button" class="btn-view" style="display: none;">View</button>
                                </div>
                                <div class="file-upload-note">Maximum file size: 5MB | Allowed format: PDF</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Memorandum & Articles of Association</label>
                                <div class="file-upload">
                                    <input type="file" id="memorandum" accept=".pdf" style="display: none;">
                                    <button type="button" class="btn-upload" onclick="document.getElementById('memorandum').click()">Choose File</button>
                                    <span class="file-name">No file chosen</span>
                                    <button type="button" class="btn-view" style="display: none;">View</button>
                                </div>
                                <div class="file-upload-note">Maximum file size: 5MB | Allowed format: PDF</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Board Resolution/Authorization Letter</label>
                                <div class="file-upload">
                                    <input type="file" id="board-resolution" accept=".pdf" style="display: none;">
                                    <button type="button" class="btn-upload" onclick="document.getElementById('board-resolution').click()">Choose File</button>
                                    <span class="file-name">No file chosen</span>
                                    <button type="button" class="btn-view" style="display: none;">View</button>
                                </div>
                                <div class="file-upload-note">Required for companies | Maximum file size: 5MB | Allowed format: PDF</div>
                            </div>
                        </div>

                        <div class="form-section">
                            <div class="section-header">
                                <span>Additional Business Information</span>
                            </div>

                            <div class="form-grid">
                                <div class="form-group">
                                    <label class="form-label">Nature of Business <span class="required">*</span></label>
                                    <textarea class="form-input" rows="3" placeholder="Briefly describe the nature of your business"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Number of Employees</label>
                                    <input type="number" class="form-input" min="0">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Annual Turnover (LKR)</label>
                                    <select class="form-select">
                                        <option value="">Select Range</option>
                                        <option>Below 1 Million</option>
                                        <option>1 Million - 5 Million</option>
                                        <option>5 Million - 10 Million</option>
                                        <option>10 Million - 50 Million</option>
                                        <option>50 Million - 100 Million</option>
                                        <option>Above 100 Million</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Export Markets (if any)</label>
                                    <input type="text" class="form-input" placeholder="e.g. USA, UK, Europe">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Import Sources (if any)</label>
                                    <input type="text" class="form-input" placeholder="e.g. China, India, Japan">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Name <span class="required">*</span></label>
                                    <input type="text" class="form-input">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Branch <span class="required">*</span></label>
                                    <input type="text" class="form-input">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Account Number <span class="required">*</span></label>
                                    <input type="text" class="form-input">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Account Name <span class="required">*</span></label>
                                    <input type="text" class="form-input">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Account Type <span class="required">*</span></label>
                                    <select class="form-select">
                                        <option value="">Select Account Type</option>
                                        <option>Savings</option>
                                        <option>Current</option>
                                        <option>Foreign Currency</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Bank Account Currency <span class="required">*</span></label>
                                    <select class="form-select">
                                        <option value="">Select Currency</option>
                                        <option>LKR (Sri Lankan Rupee)</option>
                                        <option>USD (US Dollar)</option>
                                        <option>EUR (Euro)</option>
                                        <option>GBP (British Pound)</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">SWIFT/BIC Code</label>
                                    <input type="text" class="form-input" placeholder="e.g. ABCDEF12">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">IBAN (International Bank Account Number)</label>
                                    <input type="text" class="form-input" placeholder="e.g. XX12 3456 7890 1234 5678 90">
                                </div>
                            </div>

                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Tax Identification Number <span class="required">*</span></label>
                                <input type="text" class="form-input" value="113865216">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Permit Number</label>
                                <input type="text" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">VAT Number <span class="required">*</span></label>
                                <input type="text" class="form-input" value="113865216V525">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Permit Expiration Date</label>
                                <input type="date" class="form-input">
                            </div>

                            <div class="form-group">
                                <label class="form-label">VAT Expiration Date</label>
                                <input type="date" class="form-input" value="2025-07-03">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Director Merchant Shipping License Number</label>
                                <input type="text" class="form-input">
                            </div>
                        </div>

                        <button class="submit-button">Save</button>
                        <div style="clear: both;"></div>
                    </div>
                </div>

                <!-- Owner Tab -->
                <div id="owner-tab" class="tab-content">
                    <div class="form-section">
                        <div class="section-header">
                            <span>Owner/Shareholder Information</span>
                            <span class="required-info">(Fields marked with * are required)</span>
                        </div>

                        <div class="owner-list" id="ownerList">
                            <!-- Owner cards will be dynamically added here -->
                        </div>

                        <div class="add-owner-container">
                            <button type="button" class="btn-add-owner" onclick="addOwner()">
                                <i class="fas fa-plus"></i> Add Owner/Shareholder
                            </button>
                        </div>

                        <!-- Owner Form Template (Hidden) -->
                        <div class="owner-form-template" id="ownerFormTemplate" style="display: none;">
                            <div class="owner-card">
                                <div class="owner-card-header">
                                    <h4>Owner/Shareholder <span class="owner-number">1</span></h4>
                                    <button type="button" class="btn-remove-owner" onclick="removeOwner(this)">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="form-grid">
                                    <div class="form-group">
                                        <label class="form-label">Full Name <span class="required">*</span></label>
                                        <input type="text" class="form-input" name="owner_name[]" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">NIC/Passport Number <span class="required">*</span></label>
                                        <input type="text" class="form-input" name="owner_nic[]" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Date of Birth <span class="required">*</span></label>
                                        <input type="date" class="form-input" name="owner_dob[]" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Nationality <span class="required">*</span></label>
                                        <select class="form-select" name="owner_nationality[]" required>
                                            <option value="">Select Nationality</option>
                                            <option value="LK">Sri Lankan</option>
                                            <option value="AF">Afghan</option>
                                            <option value="IN">Indian</option>
                                            <option value="PK">Pakistani</option>
                                            <option value="BD">Bangladeshi</option>
                                            <option value="GB">British</option>
                                            <option value="US">American</option>
                                            <option value="CA">Canadian</option>
                                            <option value="AU">Australian</option>
                                            <option value="JP">Japanese</option>
                                            <option value="CN">Chinese</option>
                                            <option value="OTHER">Other</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Address <span class="required">*</span></label>
                                        <textarea class="form-input" name="owner_address[]" rows="2" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Contact Number <span class="required">*</span></label>
                                        <input type="tel" class="form-input" name="owner_contact[]" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-input" name="owner_email[]" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Ownership Percentage <span class="required">*</span></label>
                                        <div class="input-group">
                                            <input type="number" class="form-input" name="owner_percentage[]" min="0.01" max="100" step="0.01" required>
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-input" name="owner_designation[]">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">NIC/Passport Copy</label>
                                        <div class="file-upload">
                                            <input type="file" class="owner-file" name="owner_id_proof[]" accept=".pdf,.jpg,.jpeg,.png" style="display: none;">
                                            <button type="button" class="btn-upload" onclick="this.previousElementSibling.click()">Choose File</button>
                                            <span class="file-name">No file chosen</span>
                                            <button type="button" class="btn-view" style="display: none;">View</button>
                                        </div>
                                        <div class="file-upload-note">Maximum file size: 5MB | Allowed formats: PDF, JPG, PNG</div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Proof of Address</label>
                                        <div class="file-upload">
                                            <input type="file" class="owner-file" name="owner_address_proof[]" accept=".pdf,.jpg,.jpeg,.png" style="display: none;">
                                            <button type="button" class="btn-upload" onclick="this.previousElementSibling.click()">Choose File</button>
                                            <span class="file-name">No file chosen</span>
                                            <button type="button" class="btn-view" style="display: none;">View</button>
                                        </div>
                                        <div class="file-upload-note">Maximum file size: 5MB | Allowed formats: PDF, JPG, PNG</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attachment Tab -->
                <div id="attachment-tab" class="tab-content">
                    <div class="form-section">
                        <div class="section-header">
                            <span>Required Documents</span>
                            <span class="required-info">Please upload all required documents in PDF, JPG, or PNG format (max 5MB per file)</span>
                        </div>

                        <div class="form-note" style="margin-bottom: 20px;">
                            <p>Please ensure all uploaded documents are clear, legible, and valid. You can upload multiple files for each document type if needed.</p>
                        </div>

                        <div class="document-upload-list">
                            <!-- Business Registration Documents -->
                            <div class="document-upload-item">
                                <div class="document-info">
                                    <h4>1. Business Registration Certificate</h4>
                                    <p>Upload a clear copy of your business registration certificate issued by the relevant authority.</p>
                                </div>
                                <div class="document-upload-controls">
                                    <div class="file-upload">
                                        <input type="file" id="business-reg-cert" class="document-file" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                        <button type="button" class="btn-upload" onclick="document.getElementById('business-reg-cert').click()">
                                            <i class="fas fa-upload"></i> Upload
                                        </button>
                                        <div class="file-list" id="business-reg-cert-list">
                                            <!-- Uploaded files will be listed here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tax Registration Documents -->
                            <div class="document-upload-item">
                                <div class="document-info">
                                    <h4>2. Tax Registration Certificates</h4>
                                    <p>Upload copies of your TIN, VAT, SVAT, and other tax registration certificates.</p>
                                </div>
                                <div class="document-upload-controls">
                                    <div class="file-upload">
                                        <input type="file" id="tax-docs" class="document-file" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                        <button type="button" class="btn-upload" onclick="document.getElementById('tax-docs').click()">
                                            <i class="fas fa-upload"></i> Upload
                                        </button>
                                        <div class="file-list" id="tax-docs-list">
                                            <!-- Uploaded files will be listed here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Owner/Director Documents -->
                            <div class="document-upload-item">
                                <div class="document-info">
                                    <h4>3. Owner/Director Identification</h4>
                                    <p>Upload copies of NIC/Passport and proof of address for all owners/directors.</p>
                                </div>
                                <div class="document-upload-controls">
                                    <div class="file-upload">
                                        <input type="file" id="owner-docs" class="document-file" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                        <button type="button" class="btn-upload" onclick="document.getElementById('owner-docs').click()">
                                            <i class="fas fa-upload"></i> Upload
                                        </button>
                                        <div class="file-list" id="owner-docs-list">
                                            <!-- Uploaded files will be listed here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bank Details -->
                            <div class="document-upload-item">
                                <div class="document-info">
                                    <h4>4. Bank Account Details</h4>
                                    <p>Upload a copy of a bank statement or cancelled cheque showing account details.</p>
                                </div>
                                <div class="document-upload-controls">
                                    <div class="file-upload">
                                        <input type="file" id="bank-docs" class="document-file" accept=".pdf,.jpg,.jpeg,.png">
                                        <button type="button" class="btn-upload" onclick="document.getElementById('bank-docs').click()">
                                            <i class="fas fa-upload"></i> Upload
                                        </button>
                                        <div class="file-list" id="bank-docs-list">
                                            <!-- Uploaded files will be listed here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Documents -->
                            <div class="document-upload-item">
                                <div class="document-info">
                                    <h4>5. Additional Documents (Optional)</h4>
                                    <p>Upload any other relevant documents that may support your application.</p>
                                </div>
                                <div class="document-upload-controls">
                                    <div class="file-upload">
                                        <input type="file" id="additional-docs" class="document-file" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                        <button type="button" class="btn-upload" onclick="document.getElementById('additional-docs').click()">
                                            <i class="fas fa-upload"></i> Upload
                                        </button>
                                        <div class="file-list" id="additional-docs-list">
                                            <!-- Uploaded files will be listed here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-note" style="margin-top: 30px; padding: 15px; background-color: #f8f9fa; border-radius: 4px;">
                            <h4><i class="fas fa-info-circle"></i> Upload Guidelines</h4>
                            <ul style="margin-bottom: 0; padding-left: 20px;">
                                <li>Maximum file size: 5MB per file</li>
                                <li>Accepted formats: PDF, JPG, JPEG, PNG</li>
                                <li>Ensure all documents are clear and legible</li>
                                <li>For multiple pages, please combine into a single PDF file</li>
                                <li>All uploaded documents should be valid and up-to-date</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Declaration Tab -->
                <div id="declaration-tab" class="tab-content">
                    <div class="form-section">
                        <div class="section-header">
                            <span>Declaration & Submission</span>
                        </div>

                        <div class="declaration-container">
                            <div class="declaration-content">
                                <h3>Terms and Conditions</h3>
                                
                                <!-- Document Management -->
            const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB in bytes
            const ALLOWED_FILE_TYPES = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
            
            // Form validation and submission
            function validateForm() {
                let isValid = true;
                const requiredFields = document.querySelectorAll('[required]');
                const errorMessages = [];
                
                // Check required fields
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                        const fieldName = field.labels && field.labels.length > 0 
                            ? field.labels[0].textContent.replace('*', '').trim() 
                            : field.placeholder || 'This field';
                        errorMessages.push(`${fieldName} is required.`);
                    } else {
                        field.classList.remove('is-invalid');
                        
                        // Additional validation for specific field types
                        if (field.type === 'email' && !isValidEmail(field.value)) {
                            field.classList.add('is-invalid');
                            isValid = false;
                            errorMessages.push('Please enter a valid email address.');
                        }
                        
                        if (field.type === 'tel' && !isValidPhone(field.value)) {
                            field.classList.add('is-invalid');
                            isValid = false;
                            errorMessages.push('Please enter a valid phone number.');
                        }
                    }
                });
                
                // Check file uploads
                const requiredFileInputs = document.querySelectorAll('.file-upload input[required]');
                requiredFileInputs.forEach(input => {
                    if (!input.files || input.files.length === 0) {
                        isValid = false;
                        const fieldName = input.closest('.form-group').querySelector('label').textContent.replace('*', '').trim();
                        errorMessages.push(`${fieldName} is required.`);
                        input.closest('.file-upload').classList.add('is-invalid');
                    } else {
                        input.closest('.file-upload').classList.remove('is-invalid');
                    }
                });
                
                // Check declaration agreement
                const declarationCheckbox = document.getElementById('declaration-agree');
                if (declarationCheckbox && !declarationCheckbox.checked) {
                    isValid = false;
                    errorMessages.push('You must agree to the terms and conditions to proceed.');
                    declarationCheckbox.classList.add('is-invalid');
                } else if (declarationCheckbox) {
                    declarationCheckbox.classList.remove('is-invalid');
                }
                
                // Display error messages if any
                if (errorMessages.length > 0) {
                    showErrorMessages(errorMessages);
                }
                
                return isValid;
            }
            
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
            
            function isValidPhone(phone) {
                const re = /^[0-9+\-\s()]{10,20}$/;
                return re.test(phone);
            }
            
            function showErrorMessages(messages) {
                // Remove any existing error messages
                const existingAlerts = document.querySelectorAll('.alert.alert-danger');
                existingAlerts.forEach(alert => alert.remove());
                
                // Create error message element
                const errorAlert = document.createElement('div');
                errorAlert.className = 'alert alert-danger';
                errorAlert.innerHTML = `
                    <h4><i class="fas fa-exclamation-triangle"></i> Please correct the following errors:</h4>
                    <ul class="mb-0">
                        ${messages.map(msg => `<li>${msg}</li>`).join('')}
                    </ul>
                `;
                
                // Insert error message at the top of the form
                const form = document.querySelector('.form-container');
                if (form) {
                    form.insertBefore(errorAlert, form.firstChild);
                    
                    // Scroll to the error message
                    setTimeout(() => {
                        errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 100);
                }
            }
            
            function collectFormData() {
                const formData = new FormData();
                
                // Add all form fields to FormData
                document.querySelectorAll('input, select, textarea').forEach(field => {
                    if (field.type === 'file') {
                        // Handle file inputs
                        for (let i = 0; i < field.files.length; i++) {
                            formData.append(field.name, field.files[i]);
                        }
                    } else if (field.type === 'checkbox' || field.type === 'radio') {
                        if (field.checked) {
                            formData.append(field.name, field.value);
                        }
                    } else {
                        formData.append(field.name, field.value);
                    }
                });
                
                return formData;
            }
            
            function saveDraft() {
                // Collect form data
                const formData = collectFormData();
                
                // Add draft flag
                formData.append('is_draft', '1');
                
                // Show saving status
                const statusElement = document.getElementById('submission-status');
                statusElement.style.display = 'block';
                statusElement.innerHTML = `
                    <div class="alert alert-info">
                        <i class="fas fa-spinner fa-spin"></i> Saving draft, please wait...
                    </div>
                `;
                
                // In a real application, you would send this to your server
                setTimeout(() => {
                    statusElement.innerHTML = `
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> Draft saved successfully!
                        </div>
                    `;
                    
                    // Hide status after 3 seconds
                    setTimeout(() => {
                        statusElement.style.display = 'none';
                    }, 3000);
                }, 1500);
                
                // For demo purposes, we'll just log the form data
                console.log('Draft data:', Object.fromEntries(formData));
            }
            
            function validateAndSubmit() {
                // First validate the form
                if (!validateForm()) {
                    return false;
                }
                
                // Show submission status
                const statusElement = document.getElementById('submission-status');
                statusElement.style.display = 'block';
                
                // Collect form data
                const formData = collectFormData();
                
                // In a real application, you would send this to your server
                // For example:
                /*
                fetch('submit_registration.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        statusElement.innerHTML = `
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle"></i> Application submitted successfully! Your reference number is: ${data.reference_number}
                            </div>
                        `;
                        
                        // Redirect to confirmation page after 3 seconds
                        setTimeout(() => {
                            window.location.href = 'confirmation.php?ref=' + data.reference_number;
                        }, 3000);
                    } else {
                        // Show error message
                        statusElement.innerHTML = `
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle"></i> Error: ${data.message || 'Failed to submit application. Please try again.'}
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    statusElement.innerHTML = `
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i> An error occurred while submitting your application. Please try again later.
                        </div>
                    `;
                });
                */
                
                // For demo purposes, we'll simulate a successful submission
                setTimeout(() => {
                    // Show success message
                    statusElement.innerHTML = `
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> Application submitted successfully! Your reference number is: REF-${Math.floor(100000 + Math.random() * 900000)}
                        </div>
                    `;
                    
                    // Disable form fields
                    document.querySelectorAll('input, select, textarea, button').forEach(field => {
                        field.disabled = true;
                    });
                    
                    // Scroll to top
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }, 2000);
                
                return false;
            }
                                <p>By submitting this application, I/We hereby declare that:</p>
                                    
                                    <ol>
                                        <li>All the information provided in this application is true, accurate, and complete to the best of my/our knowledge and belief.</li>
                                        <li>I/We understand that any false or misleading information may result in the rejection of this application or subsequent termination of registration.</li>
                                        <li>I/We agree to comply with all applicable laws, regulations, and requirements of the Sri Lanka Customs and other relevant authorities.</li>
                                        <li>I/We understand that the submission of this application does not guarantee approval and is subject to verification and approval by the relevant authorities.</li>
                                        <li>I/We authorize Sri Lanka Customs to verify the information provided in this application through any means necessary.</li>
                                        <li>I/We understand that any changes to the provided information must be reported to Sri Lanka Customs within 14 days of such changes.</li>
                                        <li>I/We agree to be bound by the rules and regulations of Sri Lanka Customs as may be amended from time to time.</li>
                                        <li>I/We understand that the processing of this application may take up to 10 working days from the date of submission of all required documents.</li>
                                    </ol>
                                    
                                    <p><strong>Data Protection Notice:</strong> The information provided in this application will be processed in accordance with the Data Protection Act No. 9 of 2022. Your data will be used for the purpose of processing your registration and may be shared with other government agencies as required by law.</p>
                                </div>
                                
                                <div class="declaration-checkbox">
                                    <div class="form-check">
                                        <input type="checkbox" id="declaration-agree" class="form-check-input" required>
                                        <label class="form-check-label" for="declaration-agree">
                                            I/We hereby declare that I/we have read, understood, and agree to the above terms and conditions.
                                            <span class="required">*</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-note" style="margin: 20px 0; padding: 15px; background-color: #f8f9fa; border-radius: 4px;">
                                    <h4><i class="fas fa-info-circle"></i> Important Notes</h4>
                                    <ul style="margin-bottom: 0; padding-left: 20px;">
                                        <li>Please ensure all information provided is accurate and up-to-date.</li>
                                        <li>Incomplete or incorrect information may delay the processing of your application.</li>
                                        <li>You will receive a confirmation email with your application reference number upon successful submission.</li>
                                        <li>You can track the status of your application using the reference number.</li>
                                        <li>For any queries, please contact our support team at <a href="mailto:support@customs.gov.lk">support@customs.gov.lk</a> or call +94 11 2 441 000.</li>
                                    </ul>
                                </div>
                                
                                <div class="submission-buttons">
                                    <button type="button" class="btn btn-secondary" onclick="saveDraft()">
                                        <i class="fas fa-save"></i> Save as Draft
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="validateAndSubmit()">
                                        <i class="fas fa-paper-plane"></i> Submit Application
                                    </button>
                                </div>
                                
                                <div id="submission-status" style="margin-top: 20px; display: none;">
                                    <div class="alert alert-info">
                                        <i class="fas fa-spinner fa-spin"></i> Processing your submission, please wait...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Register Application Button -->
            <div style="text-align: right; margin-top: 20px;">
                <button style="background: #f39c12; color: white; padding: 15px 40px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: 600;" onclick="registerApplication()">Register Application</button>
            </div>
            /**
 * Tab navigation function
 * @param {string} tabId - The ID of the tab to show
 */
<script>
    /**
     * Tab navigation function
     * @param {string} tabId - The ID of the tab to show
     */
    function showTab(tabId) {
        // Hide all tab contents and remove active class from all buttons
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.style.display = 'none';
        });
        
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Show selected tab and mark button as active
        const selectedTab = document.getElementById(`${tabId}-tab`);
        const activeButton = document.querySelector(`.tab-button[onclick*="${tabId}"]`);
        
        if (selectedTab) {
            selectedTab.style.display = 'block';
        }
        
        if (activeButton) {
            activeButton.classList.add('active');
        }
    }

    // Initialize when DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        /**
         * Validates a form field
         * @param {HTMLElement} field - The form field to validate
         * @returns {boolean} - Returns true if field is valid, false otherwise
         */
        function validateField(field) {
            if (field.hasAttribute('required') && !field.value.trim()) {
                field.style.borderColor = '#e74c3c';
                return false;
            }
            field.style.borderColor = '#bdc3c7';
            return true;
        }

        /**
         * Formats a mobile number input
         * @param {HTMLInputElement} input - The input element containing the mobile number
         */
        function formatMobileNumber(input) {
            const value = input.value.replace(/\D/g, '');
            if (value.startsWith('94')) {
                input.value = `+${value}`;
            } else if (value.startsWith('0')) {
                input.value = `+94${value.substring(1)}`;
            }
        }

        /**
         * Handles file viewer button click
         */
        function handleFileViewerClick() {
            // In a real application, this would open the file viewer
            alert('File viewer would open here in a real application.');
        }

        // Initialize form validation
        const formFields = document.querySelectorAll('.form-input, .form-select');
        formFields.forEach(field => {
            field.addEventListener('blur', () => validateField(field));
        });

        // Initialize mobile number formatting for relevant fields
        const textInputs = document.querySelectorAll('input[type="text"]');
        textInputs.forEach(input => {
            const placeholder = input.placeholder || '';
            const value = input.value || '';
            const isMobileField = placeholder.toLowerCase().includes('mobile') || 
                                value.includes('+94');
            
            if (isMobileField) {
                input.addEventListener('input', () => formatMobileNumber(input));
            }
        });

        // Initialize file viewer buttons
        const fileViewers = document.querySelectorAll('.file-viewer');
        fileViewers.forEach(button => {
            button.addEventListener('click', handleFileViewerClick);
        });

        // Document management
        const MAX_FILE_SIZE = 5 * 1024 * 1024; // 5MB in bytes
        const ALLOWED_FILE_TYPES = ['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'];
        
        // Form validation and submission
        function validateForm() {
            let isValid = true;
            const requiredFields = document.querySelectorAll('[required]');
            const errorMessages = [];
            
            // Check required fields
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                    const fieldName = field.labels && field.labels.length > 0 
                        ? field.labels[0].textContent.replace('*', '').trim() 
                        : field.placeholder || 'This field';
                    errorMessages.push(`${fieldName} is required.`);
                } else {
                    field.classList.remove('is-invalid');
                    
                    // Additional validation for specific field types
                    if (field.type === 'email' && !isValidEmail(field.value)) {
                        field.classList.add('is-invalid');
                        isValid = false;
                        errorMessages.push('Please enter a valid email address.');
                    }
                    
                    if (field.type === 'tel' && !isValidPhone(field.value)) {
                        field.classList.add('is-invalid');
                        isValid = false;
                        errorMessages.push('Please enter a valid phone number.');
                    }
                }
            });
            
            // Check file uploads
            const requiredFileInputs = document.querySelectorAll('.file-upload input[required]');
            requiredFileInputs.forEach(input => {
                if (!input.files || input.files.length === 0) {
                    isValid = false;
                    const fieldName = input.closest('.form-group').querySelector('label').textContent.replace('*', '').trim();
                    errorMessages.push(`${fieldName} is required.`);
                    input.closest('.file-upload').classList.add('is-invalid');
                } else {
                    input.closest('.file-upload').classList.remove('is-invalid');
                }
            });
            
            // Check declaration agreement
            const declarationCheckbox = document.getElementById('declaration-agree');
            if (declarationCheckbox && !declarationCheckbox.checked) {
                isValid = false;
                errorMessages.push('You must agree to the terms and conditions to proceed.');
                declarationCheckbox.classList.add('is-invalid');
            } else if (declarationCheckbox) {
                declarationCheckbox.classList.remove('is-invalid');
            }
            
            // Display error messages if any
            if (errorMessages.length > 0) {
                showErrorMessages(errorMessages);
            }
            
            return isValid;
        }
        
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }
        
        function isValidPhone(phone) {
            const re = /^[0-9+\-\s()]{10,20}$/;
            return re.test(phone);
        }
        
        function showErrorMessages(messages) {
            // Remove any existing error messages
            const existingAlerts = document.querySelectorAll('.alert.alert-danger');
            existingAlerts.forEach(alert => alert.remove());
            
            // Create error message element
            const errorAlert = document.createElement('div');
            errorAlert.className = 'alert alert-danger';
            errorAlert.innerHTML = `
                <h4><i class="fas fa-exclamation-triangle"></i> Please correct the following errors:</h4>
                <ul class="mb-0">
                    ${messages.map(msg => `<li>${msg}</li>`).join('')}
                </ul>
            `;
            
            // Insert error message at the top of the form
            const form = document.querySelector('.form-container');
            if (form) {
                form.insertBefore(errorAlert, form.firstChild);
                
                // Scroll to the error message
                setTimeout(() => {
                    errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 100);
            }
        }
        
        function collectFormData() {
            const formData = new FormData();
            
            // Add all form fields to FormData
            document.querySelectorAll('input, select, textarea').forEach(field => {
                if (field.type === 'file') {
                    // Handle file inputs
                    for (let i = 0; i < field.files.length; i++) {
                        formData.append(field.name, field.files[i]);
                    }
                } else if (field.type === 'checkbox' || field.type === 'radio') {
                    if (field.checked) {
                        formData.append(field.name, field.value);
                    }
                } else {
                    formData.append(field.name, field.value);
                }
            });
            
            return formData;
        }
        
        function saveDraft() {
            // Collect form data
            const formData = collectFormData();
            
            // Add draft flag
            formData.append('is_draft', '1');
            
            // Show saving status
            const statusElement = document.getElementById('submission-status');
            statusElement.style.display = 'block';
            statusElement.innerHTML = `
                <div class="alert alert-info">
                    <i class="fas fa-spinner fa-spin"></i> Saving draft, please wait...
                </div>
            `;
            
            // In a real application, you would send this to your server
            setTimeout(() => {
                statusElement.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> Draft saved successfully!
                    </div>
                `;
                
                // Hide status after 3 seconds
                setTimeout(() => {
                    statusElement.style.display = 'none';
                }, 3000);
            }, 1500);
            
            // For demo purposes, we'll just log the form data
            console.log('Draft data:', Object.fromEntries(formData));
        }
        
        function validateAndSubmit() {
            // First validate the form
            if (!validateForm()) {
                return false;
            }
            
            // Show submission status
            const statusElement = document.getElementById('submission-status');
            statusElement.style.display = 'block';
            
            // Collect form data
            const formData = collectFormData();
            
            // In a real application, you would send this to your server
            // For example:
            /*
            fetch('submit_registration.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    statusElement.innerHTML = `
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i> Application submitted successfully! Your reference number is: ${data.reference_number}
                        </div>
                    `;
                    
                    // Redirect to confirmation page after 3 seconds
                    setTimeout(() => {
                        window.location.href = 'confirmation.php?ref=' + data.reference_number;
                    }, 3000);
                } else {
                    // Show error message
                    statusElement.innerHTML = `
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i> Error: ${data.message || 'Failed to submit application. Please try again.'}
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                statusElement.innerHTML = `
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i> An error occurred while submitting your application. Please try again later.
                    </div>
                `;
            });
            */
            
            // For demo purposes, we'll simulate a successful submission
            setTimeout(() => {
                // Show success message
                statusElement.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i> Application submitted successfully! Your reference number is: REF-${Math.floor(100000 + Math.random() * 900000)}
                    </div>
                `;
                
                // Disable form fields
                document.querySelectorAll('input, select, textarea, button').forEach(field => {
                    field.disabled = true;
                });
                
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 2000);
            
            return false;
        }
    });
    </script>
</body>
</html>
