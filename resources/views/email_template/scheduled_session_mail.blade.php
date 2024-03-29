<!-- Scheduled Session -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Session Scheduled</title>
  <!-- Designed by https://github.com/kaytcat -->
  <!-- Header image designed by Freepik.com -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

  <style type="text/css">
    /* Take care of image borders and formatting */

    img {
      max-width: 600px;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    table {
      border-collapse: collapse !important;
    }

    #outlook a {
      padding: 0;
    }

    .ReadMsgBody {
      width: 100%;
    }

    .ExternalClass {
      width: 100%;
    }

    .backgroundTable {
      margin: 0 auto;
      padding: 0;
      width: 100% !important;
    }

    table td {
      border-collapse: collapse;
    }

    .ExternalClass * {
      line-height: 115%;
    }


    /* General styling */

    td {
      font-family: Arial, sans-serif;
      color: #6f6f6f;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -webkit-text-size-adjust: none;
      width: 100%;
      height: 100%;
      color: #6f6f6f;
      font-weight: 400;
      font-size: 18px;
    }


    h1 {
      margin: 10px 0;
    }

    h2 {
      color: black;
    }

    p {
      color: black;
    }

    span {
      color: black;
    }

    b {
      color: black;
    }

    a {
      color: #27aa90;
      text-decoration: none;
    }

    .force-full-width {
      width: 100% !important;
    }

    .force-width-80 {
      width: 80% !important;
    }


    .body-padding {
      padding: 0 75px;
    }

    .mobile-align {
      text-align: right;
    }

    .img-rounded {
      border-radius: 50%;
    }

    .iconatas {
      padding-left: 25px;
      padding-top: 25px;
    }

    .button {
      background-color: #685FCD;
      /* Green */
      border: none;
      color: white;
      padding: 11px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 25px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 10px;
      outline: none;
      box-shadow: 0 3px #5a5686;
      width: 250px;
      height: 50px;
    }
  </style>

  <style type="text/css" media="screen">
    @media screen {
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
      /* Thanks Outlook 2013! http://goo.gl/XLxpyl */

      .w280 {
        width: 280px !important;
      }

    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="w320"] {
        width: 320px !important;
      }

      td[class*="w320"] {
        width: 280px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      img[class*="w320"] {
        width: 250px !important;
        height: 67px !important;
      }

      td[class*="mobile-spacing"] {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
      }

      *[class*="mobile-br"] {
        font-size: 12px !important;
      }

      td[class*="mobile-w20"] {
        width: 20px !important;
      }

      img[class*="mobile-w20"] {
        width: 20px !important;
      }

      td[class*="mobile-center"] {
        text-align: center !important;
      }

      table[class*="w100p"] {
        width: 100% !important;
      }

      td[class*="activate-now"] {
        padding-right: 0 !important;
        padding-top: 20px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
      }

      td[class*="mobile-align"] {
        text-align: left !important;
      }

    }
  </style>
</head>

<body offset="0" class="body" style="padding:0; margin:0; display:block; background:#eeebeb; -webkit-text-size-adjust:none" bgcolor="#eeebeb">
  <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
    <tr>
      <td align="center" valign="top" style="background-color:#eeebeb" width="100%">

        <center>

          <table cellspacing="0" cellpadding="0" width="600" class="w320">
            <tr>
              <td align="center" valign="top" style="background-color: #E9E7FF;">


                <table style="margin:0 auto;" cellspacing="0" cellpadding="0" width="100%">
                  <tr style="padding-left: 20px;">
                    <td style="text-align: left;">
                      <div class="iconatas">
                        <img src="{{ $message->embed(public_path().'/assets/images/icons/email/catalizlogo.png') }}">
                        <img src="{{ $message->embed(public_path().'/assets/images/icons/email/cataliz.png') }}">
                      </div>
                    </td>
                    <div>
                      <td rowspan="3" style="text-align:center; vertical-align:middle;width: 200px;background-color:#685FCD ;">

                        <img class="img-rounded" src="{{ $message->embed(public_path().'/assets/images/avatars/1.png') }}" alt="" style="width:150px; height:150px;">
                      </td>
                    </div>
                  <tr>
                    <td style="text-align: left;">
                      <h1 style="color: black;margin-top: 50px;margin-left: 15px;">Session Scheduled</h1>
                      <span style="margin-left: 15px;color: #656565;">There’s a new session scheduled for you </span>
                      <br>
                      <span style="margin-left: 15px;color: #656565;">by your coach.</span>
                    </td>
                  </tr>
                  <tr style="height: 80px;">
                    <td style="text-align: left;">

                    </td>
                  </tr>
            </tr>
          </table>


          <table cellspacing="0" cellpadding="15px" class="force-full-width" style="background-color:#3bcdb0;border: 1px solid #9B93EF;border-top:white;">
            <tr>
              <td style="background-color:white;">

                <table cellspacing="0" cellpadding="0" class="force-full-width">
                  <tr>
                    <!-- Nama -->
                    <h3 style="color: black;">Hai, {{ $email_data['receiver_name'] }}</h3>
                    <span style="color: black;">CONGRATULATION!! Your session has been successfully scheduled.</span>
                    <span style="color: black;">We hope that you will be able to attend the scheduled sessions with the following details:</span>
                  </tr>
                </table>



              </td>
            </tr>
          </table>
          <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #9B93EF;background-color:#E9E7FF">
            <tr>
              <td style="text-align: center;">
                <h2>Details</h2>
              </td>
            </tr>
          </table>
          <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ffffff" width="100%" style="border: 1px solid #9B93EF;border-top:white;">
            <tr>
              <td style="background-color:#ffffff; padding-top: 15px;">

                <center>
                  <div>
                    <table style="margin:1em auto;" cellspacing="0" cellpadding="10px" class="force-width-76" width="%">
                      <tr>
                        <td style="text-align:left;">
                          <span>Session</span>
                        </td>
                        <td style="width: 150px;"></td>
                        <td style="text-align:left; vertical-align:top;">
                          <!-- sesi ke -.... -->
                          <span>{{ $email_data['session_name'] }}</span>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:left;">
                          <span>Topic</span>
                        </td>
                        <td style=""></td>
                        <td style="text-align:left; vertical-align:top;">
                          <!-- topic -->
                          <span>{{ $email_data['topic'] }}</span>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:left;">
                          <span>Coach Name</span>
                        </td>
                        <td style=""></td>
                        <td style="text-align:left; vertical-align:top;">
                          <!-- Coach Name -->
                          <span>{{ $email_data['coach_name'] }}</span>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:left;">
                          <span>Date</span>
                        </td>
                        <td style=""></td>
                        <td style="text-align:left; vertical-align:top;">
                          <span>{{ $email_data['date'] }}</span>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:left;">
                          <span>Time</span>
                        </td>
                        <td style=""></td>
                        <td style="text-align:left; vertical-align:top;">
                          <!-- waktu -->
                          <span>{{ $email_data['time'] }} WIB</span>
                        </td>
                      </tr>
                      <tr>
                        <td style="text-align:left;">
                          <span>Media</span>
                        </td>
                        <td style=""></td>
                        <td style="text-align:left; vertical-align:top;">
                          <!-- Media -->
                          <span>{{ $email_data['media'] }}</span>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #9B93EF;background-color:#E9E7FF">
                    <tr>
                      <td style="text-align: center;">

                      </td>
                    </tr>
                  </table>

                  <table style="margin: 0 auto;" cellspacing="0" cellpadding="0" class="force-width-80" width="80%">
                    <tr>
                      <td style="text-align: justify;">
                        <br>
                        <p>You can see a list of all your sessions on the "Agenda" menu in your Cataliz account or click
                          on
                          the button below.</p>


                        <table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
                          <tr style="height: 10px;">
                            <td></td>
                          </tr>
                          <tr>
                            <td class="mobile-block" style="text-align: center;">
                              <table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
                                <tbody>
                                  <tr>
                                    <td>
                                      <!-- link ke agendas -->
                                      <a href="{{ route('agendas.index') }}">
                                        <button class="button button1">Go To My Agendas</button>
                                      </a>
                                    </td>
                                  </tr>

                                </tbody>
                              </table>

                            </td>
                          </tr>
                          <tr style="height: 10px;">
                            <td class="mobile-block" style="text-align: center;">
                              <table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="    font-size: 14px;padding-bottom: 10px;font-weight: bold;">

                                    </td>
                                  </tr>

                                </tbody>
                              </table>
                          <tr style="height: 15px;">
                            <td></td>
                          </tr>
                      </td>
                    </tr>
                  </table>
                  <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #8D8D8D;background-color:#E9E7FF">
                    <tr>
                      <td style="text-align: center;">

                      </td>
                    </tr>
                  </table>

                  <p style="text-align: justify;color: black;">For further information, please contact email <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZdjtXMLCzXZJhvLlxSMhgZZgkCdPTltDMhFmjLSmzsjxLwncvlSPTzgnCJlmhpvrtCcvq">halo@cataliz.id</a>
                    or +62 822-3585-0005
                    on Monday - Friday 09:00 - 18:00 WIB.
                  </p>
                  <table cellspacing="0" cellpadding="0" width="100%" style="border: 1px solid #8D8D8D;background-color:#E9E7FF">
                    <tr>
                      <td style="text-align: center;">

                      </td>
                    </tr>
                  </table>


                  <center>
                    <table cellspacing="0" cellpadding="0" width="500" class="w320">
                      <tr>
                        <td>
                          <table cellspacing="0" cellpadding="30" width="100%">
                            <tr style="text-align: center;">
                              <td style="">
                                <a href="https://www.instagram.com/cataliz.id/">
                                  <img src="{{ $message->embed(public_path().'/assets/images/icons/email/blackinstagram.png') }}">
                                </a>
                                <a href="https://cataliz.id/">
                                  <img src="{{ $message->embed(public_path().'/assets/images/icons/email/blacklink.png') }}">
                                </a>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <center>
                            <table style="margin:0 auto;" cellspacing="0" cellpadding="5" width="100%">
                              <tr>
                                <td style="text-align:center; margin:0 auto;" width="100%">
                                  <p style="color: black;">COPYRIGHT &copy; {{ Carbon\Carbon::now()->year }}
                                    Cataliz.id. All Right Reserved
                                  </p>

                                </td>
                              </tr>
                            </table>
                          </center>
                        </td>
                      </tr>
                    </table>
                  </center>
              </td>
            </tr>
          </table>
        </center>
      </td>
    </tr>
  </table>
  </td>
  </tr>
  </table>
  </center>

  </td>
  </tr>
  </table>
</body>

</html>