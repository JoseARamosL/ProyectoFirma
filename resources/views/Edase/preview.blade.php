<div class="container" id="firma">
    <div
        style="max-width: 574px; padding: 20px; background: #ffffff; margin: 40px 0; font-family: 'Arial', 'Helvetica'">

        <p style="color: #021438; font-size: 18px; font-weight: bold; text-transform: uppercase; margin-bottom: 7px;">
            {{ strtoupper($edase['name']) }}</p>
        <p style="color: #021438; font-size: 12px; margin-top: 0">{{ strtoupper($edase['cargo']) }}</p>
        <table>
            <tr>
                <td>
                    <p style="color: #021438; font-size: 13px; font-weight: bold;">{{ $edase['phone'] }}</p>
                </td>
            </tr>

        </table>
        <table style="margin-top: 20px; width: 100%;">
            <tr>
                <td>
                    <p
                        style="color: #021438; font-size: 12px; font-weight: 200; margin-bottom: 10px; line-height: 1.3em;">
                        Trae un amigo y te regalamos un <br><b>CHEQUE DE AMAZON DE <span
                                style="border-bottom:2px solid #6cff92">100€.</span></b></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p
                        style="color: #021438; font-size: 12px; font-weight: 200; margin-bottom: 20px; line-height: 1em; background-color: #6cff92; max-width: 120px; text-align: center;padding: 6px;font-weight: bold;margin-top: 0;">
                        <a href="https://ayudatpymes.com/promo/amigo-master/?utm_source=Firma"
                            style="color: #021438; text-decoration: none; font-weight: bold;">PINCHA AQUÍ</a>
                    </p>
                </td>

            </tr>
            <tr>
                <td>
                    <p style="color: #021438; font-size: 12px; font-weight: bold;"><a href="https://edase.es"
                            style="color: #021438; font-size: 12px; font-weight: bold; text-decoration: none;">EDASE.es</a>
                    </p>
                </td>
            </tr>
            <tr>
                <td><img style="width:120px; margin-top: 10px;" src="https://edase.es/images/mail/logo.jpg" alt=""></td>
            </tr>
        </table>
        <table style="margin-top: 10px;">
            <tr>
                <td><a style="margin-left: 0px; margin-right: 5px; font-size: 10px; color: #021438; text-decoration: none;"
                        href="https://www.instagram.com/escueladeasesores_/">INSTAGRAM</a></td>
                <td><a style="margin-left: 5px; margin-right: 5px; font-size: 10px; color: #021438; text-decoration: none;"
                        href="https://www.linkedin.com/company/edase-escuela-de-asesores-de-ayuda-t-pymes">LINKEDIN</a>
                </td>
                <td><a style="margin-left: 5px; margin-right: 5px; font-size: 10px; color: #021438; text-decoration: none;"
                        href="https://www.tiktok.com/@edase_escuela">TIKTOK</a></td>
                <td><a style="margin-left: 5px; margin-right: 5px; font-size: 10px; color: #021438; text-decoration: none;"
                        href="https://www.facebook.com/escueladeasesores/">FACEBOOK</a></td>
                <td><a style="margin-left: 5px; margin-right: 5px; font-size: 10px; color: #021438; text-decoration: none; font-weight: bold;"
                        href="https://wa.link/zgjqi0">WHATSAPP</a></td>
            </tr>
        </table>
        <table style="max-width: 574px;">
            <tr>
                <td>
                    <p style="font-size: 11px; color: #021438; font-weight: 200;">La información contenida en la
                        presente comunicación está dirigida solo a su destinatario y puede contener información
                        privilegiada y confidencial. Si Ud. no es el destinatario, por favor, notifíquenoslo
                        inmediatamente a este mismo correo electrónico y proceda a eliminar el mensaje recibido junto a
                        los archivos que pudiera contener sin conservar copia de ellos. EDASE está comprometida con la
                        protección de la privacidad y de los datos personales recogidos y procesados por nosotros. </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="font-size: 11px; color: #021438; font-weight: 200; margin-top: 20px; margin-bottom:0">Si
                        quiere saber más sobre nuestras prácticas relativas a la privacidad:</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="color: #021438; font-size: 11px; font-weight: 2s00; margin-top: 0"><a
                            style="color: #021438; text-decoration: none; font-weight: bold;"
                            href="https://edase.es/politica-privacidad">Política de Privacidad</a> | <a
                            style="color: #021438; text-decoration: none; font-weight: bold;"
                            href="https://edase.es/terminos-condiciones">Términos y Condiciones</a> | <a
                            style="color: #021438; text-decoration: none; font-weight: bold;"
                            href="https://edase.es/aviso-legal">Aviso Legal</a></p>
                </td>
            </tr>
        </table>
        <br>
        <button onclick="copyToClickBoard()">Copiar</button>
        <textarea name="textA1" id="textA1"></textarea>

    </div>


</div>

<script>
    var div1 = document.getElementById('firma');
    var textA = document.getElementById('textA1');
    textA.cols = 20;
    textA.rows = 50;
    textA.value = div1.innerHTML;
</script>

<script>
    function copyToClickBoard() {
        var content = document.getElementById('textA1').value;

        navigator.clipboard.writeText(content)
            .then(() => {
                console.log("Text copied to clipboard...")
            })
            .catch(err => {
                console.log('Something went wrong', err);
            })

    }
</script>
