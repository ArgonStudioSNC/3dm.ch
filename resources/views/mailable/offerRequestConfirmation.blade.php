<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body style="margin: 0;padding: 0;">
    <div style="margin: 0;padding: 2em 0;background: #F2EFEB;font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:15px;font-weight: 300;line-height: 1.6;color: #333333;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;">
        <div class="grid-container" style="margin: 0;padding: 0;padding-right: 1em;padding-left: 1em;max-width: 570px;margin-left: auto;margin-right: auto;">
            <div class="grid-x grid-margin-y" style="margin: 0;padding: 0;display: flex;flex-flow: row wrap;margin-top: -1em;margin-bottom: -1em;">
                <div class="cell" style="margin: 0;padding: 0;flex: 0 0 auto;min-height: 0px;min-width: 0px;width: 100%;height: auto;margin-top: 1em;margin-bottom: 1em;">
                    <svg width="auto" height="3.5em" viewBox="0 0 295.925 109.932"> style="vertical-align: middle;">
                        <path d="M21.39,42.96V54.949H74.468l-17.787,23.6,9.561,7.22L98.506,42.96Z" transform="translate(-21.39 -42.911)" fill="#3d5d6b"/>
                        <path d="M83.159,75.98l-7.232,9.586A26.55,26.55,0,1,1,33.4,106.846H21.39A38.564,38.564,0,1,0,83.159,75.98" transform="translate(-21.39 -35.454)" fill="#3d5d6b"/>
                        <path d="M130.043,42.96H94.09V152.842h11.989V54.949h23.953a42.953,42.953,0,0,1,0,85.905l-11.964.025v11.964h11.964a54.941,54.941,0,1,0,.012-109.882" transform="translate(-4.973 -42.911)" fill="#3d5d6b"/>
                        <path d="M178.04,42.92V152.839h11.976V71.874l39.974,39.949,8.458-8.47Z" transform="translate(13.985 -42.92)" fill="#3d5d6b"/>
                        <path d="M270.812,42.92,227.32,86.4l8.483,8.495,23.021-23.021v80.965h11.989Z" transform="translate(25.113 -42.92)" fill="#3d5d6b"/>
                    </svg>
                </div>
                <div class="cell" style="margin: 0;padding: 0;flex: 0 0 auto;min-height: 0px;min-width: 0px;width: 100%;height: auto;margin-top: 1em;margin-bottom: 1em;">
                    <div class="card" style="margin: 0;padding: 0;display: flex;flex-direction: column;flex-grow: 1;margin-bottom: 0;border: 0 solid #e6e6e6;border-radius: 0;background: #fefefe;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);overflow: hidden;color: #333333;">
                        <div class="card-divider mail-about " style="margin: 0;padding: 2em;display: flex;flex: 0 1 auto;background: #3D5D6B;color: #fefefe;">
                            <h4 style="margin: 0;padding: 0;font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-style: normal;font-weight: 500;color: inherit;text-rendering: optimizeLegibility;font-size: 1.3333333333em;line-height: 1.2;margin-top: 0;margin-bottom: 0;">
                                3DM : {{ __('support.offer-request-confirmation-subject') }}
                            </h4>
                        </div>
                        <div class="card-section" style="margin: 0;padding: 2em;flex: 1 0 auto;margin-bottom: 0;">
                            <p style="margin: 0;padding: 0;margin-bottom: 1.5em;font-size: inherit;line-height: 1.6;text-rendering: optimizeLegibility;orphans: 3;widows: 3;">
                                Bonjour,<br><br>La demande d'offre suivante nous est bien parvenue. Merci ! Nous vous contacterons dans les plus brefs délais.
                            </p>
                            <blockquote style="margin: 0 0 1.5em;padding: 0.6em 1.3333333333em 0 1.2666666667em;border-left: 1px solid #cacaca;line-height: 1.6;color: #333333;page-break-inside: avoid;">
                                {!! $ticket->message !!}
                            </blockquote>
                            <p class="signature" style="margin: 0;padding: 0;margin-bottom: 0;font-size: inherit;line-height: 1.6;text-rendering: optimizeLegibility;orphans: 3;widows: 3;">
                                Avec nos meilleures salutations<br><b style="font-weight: 500;line-height: 1.9;">3DM</b> - Visualisations architecturales
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cell text-center" style="margin: 0;padding: 0;text-align: center;flex: 0 0 auto;min-height: 0px;min-width: 0px;width: 100%;height: auto;margin-top: 1em;margin-bottom: 1em;">
                    <a style="text-decoration: underline;background-color: transparent;line-height: inherit;color: #3D5D6B;cursor: pointer;" href="https://3dm.ch/">
                        visitez notre site internet
                    </a>
                    <div class="links" style="margin: 0;padding: 0;margin-top: 1em;font-size: 18px;">
                        <a href="https://facebook.com/www.3dm.ch/" style="background-color: transparent;line-height: inherit;color: #3D5D6B;text-decoration: none;cursor: pointer;margin: 0 8px;">
                            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="18px">
                                <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                            </svg>
                        </a>
                        <a href="https://instagram.com/3dm_visuals/" style="background-color: transparent;line-height: inherit;color: #3D5D6B;text-decoration: none;cursor: pointer;margin: 0 8px;">
                            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="18px">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/3dm-visualisations-architecturales/" style="background-color: transparent;line-height: inherit;color: #3D5D6B;text-decoration: none;cursor: pointer;margin: 0 8px;">
                            <svg aria-hidden="true" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="18px">
                                <path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                            </svg>
                        </a>
                    </div>
                    <hr style="box-sizing: content-box;height: 0;overflow: visible;clear: both;max-width: 40em;margin: 1.3333333333em auto;border-top: 0;border-right: 0;border-bottom: 1px solid #cacaca;border-left: 0;">
                    <h6 class="subheader" style="margin: 0;padding: 0;font-family: 'Roboto', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-style: normal;font-weight: 300;color: #8a8a8a;text-rendering: optimizeLegibility;font-size: 0.8em;line-height: 1.4;margin-top: 0.2em;margin-bottom: 0.5em;">
                        Vous recevez ce message car vous avez fait un demande d'offre sur le calculateur en ligne de 3DM - Visualisations architecturales.
                    </h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
