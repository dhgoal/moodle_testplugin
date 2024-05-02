<?php
require('../../config.php');
require_login();
require_once('./lib.php');

local_testplugin_init();

echo $OUTPUT->header();

global $DB;

$template = $DB->get_record('local_maileditor_templates', ['type' => 'passed']);
$html = 'hello';
if ($template && !empty($template->content)) {
    $html =  $template->content;
} else {
    $html = '<p style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;"><strong><span
    style="color:black;">NEW CLFP CONGRATULATIONS LETTER:</span></strong></p>
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;"><br></p>
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;"><span
        style="color:black;"><span style="font-size:15px;font-family:Calibri,sans-serif;color:black;">Congratulations,
            upon preliminary review, you have passed the test! A final review of the online proctored recording will be
            completed, but in the meantime, we will need the following few items as quickly as possible:</span></span></p>
        <ol start="1" style="margin-bottom:0cm;margin-top:0cm;" type="1">
        <li
        style="margin: 0cm 0cm 0.0001pt; font-size: 16px; font-family: Calibri, sans-serif; color: black; text-align: left;">
        <span style="font-size:15px;">Headshot</span>
        </li>
        <li
        style="margin: 0cm 0cm 0.0001pt; font-size: 16px; font-family: Calibri, sans-serif; color: black; text-align: left;">
        <span style="font-size:15px;">Brief reason as to why you chose to pursue the designation (we may use it for the
            Circular or press release)</span>
        </li>
        <li
        style="margin: 0cm 0cm 0.0001pt; font-size: 16px; font-family: Calibri, sans-serif; color: black; text-align: left;">
        <span style="font-size:15px;">Confirm your official title</span>
        </li>
        <li
        style="margin: 0cm 0cm 0.0001pt; font-size: 16px; font-family: Calibri, sans-serif; color: black; text-align: left;">
        <span style="font-size:15px;">How you would like your name on the CLFP plaque (please allow up to 60 days to receive
            your plaque). For Associates, your plaque will be automatically mailed on the date you are a full CLFP.</span>
        </li>
        <li
        style="margin: 0cm 0cm 0.0001pt; font-size: 16px; font-family: Calibri, sans-serif; color: black; text-align: left;">
        <span style="font-size:15px;">Where you would like your plaque mailed to</span>
        </li>
        </ol>
        <p><span style="font-size:15px;"><span style="font-size:15px;font-family:Calibri,sans-serif;color:black;">Some other
            helpful information:</span></span></p>
        <ul style="margin-bottom:0cm;margin-top:0cm;" type="disc">
        <li style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;color:black;"><span
            style="font-size:15px;">Update your business card, website, and LinkedIn profiles; show the world you&apos;re
            certified! For Associates, please note that you may use &lsquo;CLFP Associate&rsquo;</span></li>
        <li style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;color:black;"><span
            style="font-size:15px;">Please ensure that CLFP Foundation emails are not blocked by your organization!</span>
        </li>
        <li style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;color:black;">
        <strong><span style="font-size:15px;">Your membership is through this year only</span></strong><span
            style="font-size:15px;">; you will need to recertify for next year which includes a $155 fee and pledge to
            abide by the Standards of Conduct. Expect notification of this requirement in September</span>
        </li>
        <li style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri,sans-serif;color:black;"><span
            style="font-size:15px;">Please &lsquo;like&rsquo; the CLFP Foundation if you&apos;re on Facebook
            (click </span><span style="color:windowtext;"><a href="http://www.facebook.com/clfpfoundation"
            target="_blank" title="http://www.facebook.com/clfpfoundation"><span
                style="font-size:15px;color:#0078D7;">here</span></a></span><span style="font-size:15px;">)</span></li>
        <li style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri, sans-serif;color:black;"><span
            style="font-size:15px;">Join the CLFP Foundation LinkedIn group if you&apos;re not a member already</span></li>
        </ul>
        <p><span style="font-size:15px;"><span style="font-size:15px;font-family:Calibri, sans-serif;color:black;">As a
            Certified Lease &amp; Finance Professional/Associate you have the vision, knowledge, character and experience to
            help us pave the future. You have proven that you truly are one of industry&rsquo;s greatest assets and we could
            not accomplish what we do without your support and leadership.</span></span></p>
        <p><span style="font-size:15px;"><span style="font-size:15px;font-family:Calibri, sans-serif;color:black;"><span
            style="font-size:15px;font-family:Calibri, sans-serif;color:black;">I hope you will stay engaged in the CLFP
            program, keep us proactive and help us shape the future of equipment leasing and financing.</span></span></span>
        </p>
        <p><span style="font-size:15px;"><span style="font-size:15px;font-family:Calibri, sans-serif;color:black;"><span
            style="font-size:15px;font-family:Calibri, sans-serif;color:black;"><span
                style="font-size:15px;font-family:Calibri, sans-serif;color:black;">Last, but certainly not least, please
                feel free to contact me with questions or concerns you may have.</span></span></span></span></p>
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri, sans-serif;"><span
        style="font-size:15px;color:black;">Sincerely,</span><span
        style="font-size:15px;font-family:Times New Roman,serif;color:black;"><br></span><span
        style="font-size:15px;color:black;">Reid Raykovich, CLFP<br>Chief Executive Officer</span></p>
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:16px;font-family:Calibri, sans-serif;"><span
        style="font-size:15px;color:black;">CLFP Foundation</span><span
        style="font-size:15px;font-family:Times New Roman,serif;color:black;"><br></span><span
        style="font-size:15px;color:black;">E-mail: </span><a href="mailto:reid@clfpfoundation.org"
        title="mailto:reid@clfpfoundation.org"><span
            style="font-size:15px;color:#0078D7;">reid@clfpfoundation.org</span></a><span
        style="font-size:15px;color:black;"> </span></p>';
}

echo $html;

echo $OUTPUT->footer();