<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('send_form_email')) {
    /**
     * Send email for website form submissions (Career, Contact Us, Demo, Proposal, etc.)
     *
     * @param string $subject Form title / subject
     * @param array $data Form fields data array
     * @return bool
     */
    function send_form_email($subject, $data)
    {
        try {
            $CI = &get_instance();
            $CI->load->library('email');
            $CI->config->load('smtp_config');
            $config = $CI->config->item('smtp_noreply');
            $CI->email->initialize($config);
            $CI->email->set_newline("\r\n");
            $from_email = !empty($config['smtp_user']) ? $config['smtp_user'] : 'noreply@digicoders.in';
            $CI->email->from($from_email, 'digicoders.in Website');
            $CI->email->to('digicoderstech@gmail.com');
            // $CI->email->to('saurabhkumarssp@gmail.com');
            
            $applicant_name = !empty($data['name']) ? $data['name'] : (!empty($data['Name']) ? $data['Name'] : '');
            $apply_for = !empty($data['appaly_for']) ? $data['appaly_for'] : (!empty($data['apply_for']) ? $data['apply_for'] : '');

            if (stripos($subject, 'career') !== false || stripos($subject, 'job') !== false) {
                $full_subject = "[Job Application] New Resume Received" . (!empty($applicant_name) ? " - " . $applicant_name : "") . (!empty($apply_for) ? " (" . $apply_for . ")" : "") . " | digicoders.in";
            } else if (stripos($subject, 'contact') !== false) {
                $full_subject = "[Contact Us Form] New Message" . (!empty($applicant_name) ? " from " . $applicant_name : "") . " | digicoders.in Website";
            } else if (stripos($subject, 'demo') !== false) {
                $full_subject = "[Demo Request] New Request" . (!empty($applicant_name) ? " from " . $applicant_name : "") . " | digicoders.in Website";
            } else if (stripos($subject, 'proposal') !== false) {
                $full_subject = "[Proposal Request] New Request" . (!empty($applicant_name) ? " from " . $applicant_name : "") . " | digicoders.in Website";
            } else if (stripos($subject, 'call') !== false) {
                $full_subject = "[Call Back Request] New Request" . (!empty($applicant_name) ? " from " . $applicant_name : "") . " | digicoders.in Website";
            } else {
                $full_subject = "[New Enquiry] " . $subject . (!empty($applicant_name) ? " from " . $applicant_name : "") . " | digicoders.in Website";
            }
            $CI->email->subject($full_subject);

            $message = "<!DOCTYPE html>
            <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <title>" . htmlspecialchars($full_subject) . "</title>
                <style type='text/css'>
                    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
                    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
                    img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
                    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #f0f3f8; font-family: \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; }
                    * { box-sizing: border-box; }

                    @media screen and (max-width: 600px) {
                        .email-wrapper { padding: 10px 6px !important; }
                        .email-card { width: 100% !important; max-width: 100% !important; border-radius: 12px !important; }
                        .email-header { padding: 22px 16px !important; }
                        .email-header h1 { font-size: 20px !important; }
                        .email-body { padding: 20px 16px !important; }
                        .email-body-title { font-size: 18px !important; }
                        .responsive-table { width: 100% !important; border-radius: 8px !important; }
                        .responsive-tr { display: block !important; width: 100% !important; border-bottom: 1px solid #e2e8f0 !important; margin-bottom: 6px !important; }
                        .responsive-td-label { display: block !important; width: 100% !important; background: #f1f5f9 !important; padding: 8px 12px 4px 12px !important; border-bottom: none !important; font-weight: 700 !important; font-size: 12px !important; text-transform: uppercase; color: #475569 !important; }
                        .responsive-td-value { display: block !important; width: 100% !important; padding: 4px 12px 10px 12px !important; border-bottom: none !important; font-size: 13px !important; word-break: break-word !important; }
                        .btn-resume { display: block !important; width: 100% !important; text-align: center !important; margin-top: 6px !important; font-size: 12px !important; word-break: break-all !important; }
                    }
                </style>
            </head>
            <body style='margin: 0; padding: 25px 10px; background-color: #f0f3f8; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;'>
                <div class='email-wrapper' style='width: 100%; max-width: 620px; margin: 0 auto;'>
                    <div class='email-card' style='background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;'>
                        <!-- Header -->
                        <div class='email-header' style='background: linear-gradient(135deg, #006DAB 0%, #00964C 100%); padding: 30px 25px; text-align: center;'>
                            <h1 style='color: #ffffff; margin: 0; font-size: 24px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;'>DigiCoders</h1>
                            <span style='display: inline-block; background: rgba(255,255,255,0.2); color: #ffffff; padding: 4px 14px; border-radius: 20px; font-size: 12px; margin-top: 8px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;'>" . (stripos($subject, 'career') !== false ? "Job Application Alert" : "Website Inquiry Alert") . "</span>
                        </div>
                        
                        <!-- Content -->
                        <div class='email-body' style='padding: 35px 30px;'>
                            <h2 class='email-body-title' style='color: #1e293b; font-size: 20px; margin: 0 0 10px 0; font-weight: 700;'>" . htmlspecialchars($subject) . "</h2>
                            <p style='color: #64748b; font-size: 14px; margin-bottom: 25px; line-height: 1.5;'>Hello Admin, a new form submission was received on <b>digicoders.in</b>. Candidate/User submission details are listed below:</p>
                            
                            <table class='responsive-table' style='width: 100%; border-collapse: collapse; margin-bottom: 25px; font-size: 14px; border-radius: 10px; overflow: hidden; border: 1px solid #e2e8f0;'>";
            $date = "";
            $time = "";
            foreach ($data as $key => $value) {
                if ($key == 'status' || $key == 'csrf_test_name') {
                    continue;
                }
                if ($key == 'date') {
                    $date = $value;
                    continue;
                }
                if ($key == 'time') {
                    $time = $value;
                    continue;
                }
                if ($key == 'created_at' || $key == 'add_date') {
                    $date = $value;
                    continue;
                }

                $label = ucfirst(str_replace('_', ' ', $key));
                if ($key == 'appaly_for' || $key == 'apply_for') {
                    $label = "Applied For Position";
                } else if ($key == 'software_name') {
                    $label = "Software Requested";
                } else if ($key == 'software_id') {
                    continue; // Skip raw DB ID if software_name is present
                } else if ($key == 'project_name') {
                    $label = "Project Requested";
                } else if ($key == 'project_id') {
                    continue; // Skip raw DB ID if project_name is present
                } else if ($key == 'req_date') {
                    $label = "Requested Date";
                }

                $raw_val = ($value !== null && $value !== '') ? (string)$value : 'N/A';
                if ($key == 'resume') {
                    $display_value = "<a href='" . base_url('public/uploads/career/' . $raw_val) . "' target='_blank' class='btn-resume' style='display: inline-block; background: #006DAB; color: #ffffff; text-decoration: none; padding: 8px 16px; border-radius: 6px; font-weight: 600; font-size: 13px; box-shadow: 0 3px 10px rgba(0,109,171,0.2); word-break: break-all;'>📄 View / Download Resume PDF (" . htmlspecialchars($raw_val) . ")</a>";
                } else {
                    $display_value = nl2br(htmlspecialchars($raw_val));
                }

                $message .= "
                            <tr class='responsive-tr'>
                                <td class='responsive-td-label' style='padding: 12px 16px; border-bottom: 1px solid #e2e8f0; color: #475569; font-weight: 600; width: 38%; background: #f8fafc;'>" . $label . "</td>
                                <td class='responsive-td-value' style='padding: 12px 16px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-weight: 500; word-break: break-word;'>" . $display_value . "</td>
                            </tr>";
            }

            if (!empty($date) || !empty($time)) {
                $message .= "
                            <tr class='responsive-tr'>
                                <td class='responsive-td-label' style='padding: 12px 16px; border-bottom: 1px solid #e2e8f0; color: #475569; font-weight: 600; width: 38%; background: #f8fafc;'>Submission Date & Time</td>
                                <td class='responsive-td-value' style='padding: 12px 16px; border-bottom: 1px solid #e2e8f0; color: #0f172a; font-weight: 500; word-break: break-word;'>" . trim($date . " " . $time) . "</td>
                            </tr>";
            }
            $message .= "
                            </table>
                            
                            <div style='background: #fff7ed; border-left: 4px solid #f97316; padding: 16px; border-radius: 8px;'>
                                <p style='margin: 0; font-size: 13px; color: #c2410c; line-height: 1.5;'>
                                    <strong>Note:</strong> This is an automated notification from digicoders.in. You can review and manage all career applications and inquiries in the Admin Panel.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Footer -->
                        <div style='background: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0;'>
                            <p style='color: #94a3b8; font-size: 12px; margin: 0;'>&copy; " . date('Y') . " DigiCoders Technologies. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </body>
            </html>";

            $CI->email->message($message);
            if (!$CI->email->send()) {
                log_message('error', 'Email sending failed: ' . $CI->email->print_debugger(array('headers', 'subject')));
                return false;
            }
            return true;
        } catch (Throwable $t) {
            log_message('error', 'Email sending exception: ' . $t->getMessage());
            return false;
        }
    }
}

if (!function_exists('send_admin_login_otp_email')) {
    /**
     * Send OTP email for Admin Login verification
     *
     * @param string $email Recipient Admin Email
     * @param string $otp 6-digit OTP
     * @param array $logindetails_data Array containing IP, BrowserName, OSName, Date, Time
     * @param string $latitude Latitude coordinate
     * @param string $longitude Longitude coordinate
     * @param string $address Location Address string
     * @return bool
     */
    function send_admin_login_otp_email($email, $otp, $logindetails_data, $latitude = 'N/A', $longitude = 'N/A', $address = '')
    {
        try {
            $CI = &get_instance();
            $CI->load->library('email');
            $CI->config->load('smtp_config');
            $config = $CI->config->item('smtp_noreply');
            $CI->email->initialize($config);
            $from_email = !empty($config['smtp_user']) ? $config['smtp_user'] : 'noreply@digicoders.in';
            $CI->email->from($from_email, 'digicoders.in Admin');
            $CI->email->to('digicoderstech@gmail.com');
            // $CI->email->to('saurabhkumarssp@gmail.com');

            $CI->email->subject("[$otp] Admin Login OTP Verification Code | digicoders.in Admin Panel");

            $maps_url = (!empty($latitude) && !empty($longitude) && $latitude !== 'N/A' && $longitude !== 'N/A') 
                ? "https://www.google.com/maps?q=" . urlencode($latitude . ',' . $longitude) 
                : "#";

            $ip_addr = !empty($logindetails_data['IP']) ? $logindetails_data['IP'] : 'N/A';
            $browser_name = !empty($logindetails_data['BrowserName']) ? $logindetails_data['BrowserName'] : 'Unknown';
            $os_name = !empty($logindetails_data['OSName']) ? $logindetails_data['OSName'] : 'Unknown';
            $date_time = (!empty($logindetails_data['Date']) ? $logindetails_data['Date'] : '') . ' ' . (!empty($logindetails_data['Time']) ? $logindetails_data['Time'] : '');

            $message = "<!DOCTYPE html>
            <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <title>[$otp] Admin Login Verification | digicoders.in</title>
                <style type='text/css'>
                    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
                    table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
                    img { -ms-interpolation-mode: bicubic; border: 0; outline: none; text-decoration: none; }
                    body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #f0f3f8; font-family: \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; }
                    * { box-sizing: border-box; }

                    @media screen and (max-width: 600px) {
                        .email-wrapper { padding: 10px 6px !important; }
                        .email-card { width: 100% !important; max-width: 100% !important; border-radius: 12px !important; }
                        .email-header { padding: 22px 16px !important; }
                        .email-header h1 { font-size: 22px !important; }
                        .email-body { padding: 20px 16px !important; }
                        .otp-box { padding: 16px 10px !important; }
                        .otp-code { font-size: 32px !important; letter-spacing: 5px !important; }
                        .responsive-tr { display: block !important; width: 100% !important; border-bottom: 1px dashed #e2e8f0 !important; padding: 4px 0 !important; }
                        .responsive-td-label { display: block !important; width: 100% !important; padding: 2px 0 1px 0 !important; font-weight: 700 !important; font-size: 11px !important; text-transform: uppercase; color: #64748b !important; }
                        .responsive-td-value { display: block !important; width: 100% !important; padding: 1px 0 4px 0 !important; font-size: 13px !important; word-break: break-word !important; }
                        .btn-maps { display: block !important; width: 100% !important; text-align: center !important; margin-top: 8px !important; font-size: 13px !important; box-sizing: border-box !important; }
                    }
                </style>
            </head>
            <body style='margin: 0; padding: 25px 10px; background-color: #f0f3f8; font-family: \"Segoe UI\", Tahoma, Geneva, Verdana, sans-serif;'>
                <div class='email-wrapper' style='width: 100%; max-width: 580px; margin: 0 auto;'>
                    <div class='email-card' style='background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 12px 35px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;'>
                        
                        <!-- Header Banner -->
                        <div class='email-header' style='background: linear-gradient(135deg, #006DAB 0%, #00964C 100%); padding: 30px 25px; text-align: center;'>
                            <h1 style='color: #ffffff; margin: 0; font-size: 26px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px;'>DigiCoders</h1>
                            <span style='display: inline-block; background: rgba(255,255,255,0.2); color: #ffffff; padding: 4px 14px; border-radius: 20px; font-size: 12px; margin-top: 8px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;'>Admin Panel Security Protocol</span>
                        </div>

                        <!-- Body Container -->
                        <div class='email-body' style='padding: 35px 30px;'>
                            <div style='text-align: center; margin-bottom: 25px;'>
                                <h2 style='color: #1e293b; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;'>Admin Login Verification</h2>
                                <p style='color: #64748b; font-size: 14px; margin: 0; line-height: 1.5;'>A login attempt was initiated for the <b>digicoders.in Admin Panel</b>. Please use the OTP below to complete authentication.</p>
                            </div>

                            <!-- OTP Box -->
                            <div class='otp-box' style='background: #f8fafc; border: 2px dashed #006DAB; border-radius: 14px; padding: 22px; text-align: center; margin-bottom: 25px;'>
                                <span style='display: block; font-size: 12px; color: #64748b; text-transform: uppercase; font-weight: 700; letter-spacing: 1.5px; margin-bottom: 8px;'>Your 6-Digit Verification Code</span>
                                <span class='otp-code' style='font-size: 44px; font-weight: 800; color: #006DAB; letter-spacing: 10px; font-family: \"Courier New\", Courier, monospace; display: inline-block; word-break: break-all;'>$otp</span>
                                <div style='margin-top: 10px;'>
                                    <span style='display: inline-block; background: #fef2f2; color: #dc2626; border: 1px solid #fecaca; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px;'>⚠️ Valid for 2 Minutes strictly</span>
                                </div>
                            </div>

                            <!-- Security & Environment Details -->
                            <div style='background: #f8fafc; border-radius: 12px; padding: 18px 20px; margin-bottom: 25px; border: 1px solid #e2e8f0;'>
                                <h4 style='margin: 0 0 12px 0; color: #0f172a; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;'>🖥️ Login Request Details</h4>
                                <table style='width: 100%; border-collapse: collapse; font-size: 13px;'>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600; width: 35%;'>Target Panel:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'>digicoders.in Admin Panel</td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Action / Purpose:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'>Admin Login OTP Verification</td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Admin Email:</td><td class='responsive-td-value' style='padding: 6px 0; color: #006DAB; font-weight: 600; word-break: break-word;'>$email</td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>IP Address:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; font-weight: 600; word-break: break-word;'><code>$ip_addr</code></td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Browser & OS:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; word-break: break-word;'>$browser_name ($os_name)</td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 6px 0; color: #64748b; font-weight: 600;'>Date & Time:</td><td class='responsive-td-value' style='padding: 6px 0; color: #0f172a; word-break: break-word;'>$date_time</td></tr>
                                </table>
                            </div>

                            <!-- Location Card Section -->
                            <div style='background: #f0fdf4; border-radius: 12px; padding: 20px; margin-bottom: 25px; border-left: 5px solid #00964C; border-top: 1px solid #dcfce7; border-right: 1px solid #dcfce7; border-bottom: 1px solid #dcfce7;'>
                                <h4 style='margin: 0 0 10px 0; color: #00964C; font-size: 15px; font-weight: 700; display: flex; align-items: center;'>📍 Login Attempt Location Info</h4>
                                <table style='width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 12px;'>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 5px 0; color: #15803d; font-weight: 600; width: 35%;'>Location Address:</td><td class='responsive-td-value' style='padding: 5px 0; color: #0f172a; font-weight: 500; line-height: 1.4; word-break: break-word;'>" . (!empty($address) ? htmlspecialchars($address) : 'N/A') . "</td></tr>
                                    <tr class='responsive-tr'><td class='responsive-td-label' style='padding: 5px 0; color: #15803d; font-weight: 600;'>Lat & Long Coords:</td><td class='responsive-td-value' style='padding: 5px 0; color: #0f172a; font-weight: 600; word-break: break-word;'><code>" . (!empty($latitude) ? $latitude : 'N/A') . ", " . (!empty($longitude) ? $longitude : 'N/A') . "</code></td></tr>
                                </table>";

            if ($maps_url !== '#') {
                $message .= "<div style='text-align: left; margin-top: 8px;'>";
                $message .= "<a href='$maps_url' target='_blank' class='btn-maps' style='display: inline-block; background: #00964C; color: #ffffff; text-decoration: none; padding: 9px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; box-shadow: 0 3px 10px rgba(0,150,76,0.25); word-break: break-word;'>🗺️ Open Location on Google Maps</a>";
                $message .= "</div>";
            }
            $message .= "</div>";

            // Warning Box
            $message .= "<div style='background: #fff7ed; border: 1px solid #ffedd5; border-radius: 10px; padding: 14px 16px; text-align: left;'>";
            $message .= "<p style='color: #c2410c; margin: 0; font-size: 12px; line-height: 1.5;'><strong>⚠️ Security Notice:</strong> If you did not initiate this login request on digicoders.in Admin Panel, please change your password immediately and inform the system administrator.</p>";
            $message .= "</div>";
            $message .= "</div>";

            // Footer
            $message .= "<div style='background: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0;'>";
            $message .= "<p style='color: #94a3b8; font-size: 12px; margin: 0;'>This is an automated security email from digicoders.in Admin System.</p>";
            $message .= "<p style='color: #cbd5e1; font-size: 11px; margin-top: 6px;'>&copy; " . date('Y') . " DigiCoders Technologies. All rights reserved.</p>";
            $message .= "</div>";

            $message .= "</div></div></body></html>";

            $CI->email->message($message);
            if (!$CI->email->send()) {
                log_message('error', 'Admin OTP email sending failed: ' . $CI->email->print_debugger(array('headers', 'subject')));
                return false;
            }
            return true;
        } catch (Throwable $t) {
            log_message('error', 'Admin OTP email sending exception: ' . $t->getMessage());
            return false;
        }
    }
}

if (!function_exists('get_hiring_status')) {
    /**
     * Get hiring status ('open' or 'closed') from database
     */
    function get_hiring_status() {
        $CI = &get_instance();
        $query = $CI->db->get_where('site_settings', array('setting_key' => 'hiring_status'));
        if ($query->num_rows() > 0) {
            return $query->row()->setting_value;
        }
        return 'closed'; // Default status is closed
    }
}

if (!function_exists('set_hiring_status')) {
    /**
     * Set hiring status ('open' or 'closed') in database
     */
    function set_hiring_status($status) {
        $CI = &get_instance();
        $status = ($status === 'open') ? 'open' : 'closed';
        $CI->db->where('setting_key', 'hiring_status');
        return $CI->db->update('site_settings', array(
            'setting_value' => $status,
            'updated_at' => date('Y-m-d H:i:s')
        ));
    }
}
