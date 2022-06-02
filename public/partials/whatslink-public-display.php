<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/racmanuel
 * @since      1.0.0
 *
 * @package    Whatslink
 * @subpackage Whatslink/public/partials
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="whatslink-container">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="whatslink-intro center">
                    <h1 class="whatslink-intro-header"><?php _e('WhatsLink','whatslink'); ?></h1>
                    <p><?php _e('Con Whatslink puedes crear, medir y modificar tus links personalizados de WhatsApp.','whatslink'); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="whatslink-form">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form"><?php _e('Codigo de Pais','whatslink'); ?></label>
                                    <input type="text" id="phone_region_code" class="form" maxlength="2">
                                    <span class="form"
                                        id="alert_phone_region_code"><?php _e('Recuerda confirmar el código de tu país.','whatslink'); ?></span>
                                </div>
                                <div class="col-12">
                                    <label class='form'><?php _e('Numero de WhatsApp','whatslink'); ?></label>
                                    <input type='text' id="phone" class='form'>
                                    <span class="form"
                                        id="alert_phone"><?php _e('Inserta tu numero de WhatsApp.','whatslink'); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form"><?php _e('Mensaje o Saludo del Usuario','whatslink'); ?></label>
                                    <textarea class="form" id="greeting"></textarea>
                                    <span class="form"
                                        id="alert_greeting"><?php _e('Por ejemplo: “Hola, quiero más información sobre el producto”','whatslink'); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="form full" type="button"
                                        id="generate-link"><?php _e('Generar Link','whatslink'); ?></button>
                                </div>
                                <div class="col-12">
                                    <button class="form success full" type="button"
                                        id="generate-qr"><?php _e('Generar QR','whatslink'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-12">
                            <span class="dashicons dashicons-arrow-right-alt2"></span>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="whatslink-phone">
                        <div class="row whatslink-phone-head">
                            <div class="col-2">
                                <div class=" whatslink-image">
                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyAgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgICdodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQnPgo8c3ZnIHdpZHRoPSI0MDFweCIgaGVpZ2h0PSI0MDFweCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAzMTIuODA5IDAgNDAxIDQwMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIzMTIuODA5IDAgNDAxIDQwMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4yMjMgMCAwIDEuMjIzIC00NjcuNSAtODQzLjQ0KSI+Cgk8cmVjdCB4PSI2MDEuNDUiIHk9IjY1My4wNyIgd2lkdGg9IjQwMSIgaGVpZ2h0PSI0MDEiIGZpbGw9IiNFNEU2RTciLz4KCTxwYXRoIGQ9Im04MDIuMzggOTA4LjA4Yy04NC41MTUgMC0xNTMuNTIgNDguMTg1LTE1Ny4zOCAxMDguNjJoMzE0Ljc5Yy0zLjg3LTYwLjQ0LTcyLjktMTA4LjYyLTE1Ny40MS0xMDguNjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJtODgxLjM3IDgxOC44NmMwIDQ2Ljc0Ni0zNS4xMDYgODQuNjQxLTc4LjQxIDg0LjY0MXMtNzguNDEtMzcuODk1LTc4LjQxLTg0LjY0MSAzNS4xMDYtODQuNjQxIDc4LjQxLTg0LjY0MWM0My4zMSAwIDc4LjQxIDM3LjkgNzguNDEgODQuNjR6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPC9zdmc+Cg=="
                                        alt="profile" class="whatslink-profile">
                                </div>
                            </div>
                            <div class="col-2">
                                <div>
                                    <span class="phone_code"></span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div>
                                    <span class="phone"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row whatslink-phone-body">
                            <p class="whatslink-phone-message"></p>
                        </div>
                        <div class="row whatslink-phone-footer">
                            <div class="col-10">
                                <p id="whatslink-phone-input"></p>
                            </div>
                            <div class="col-2">
                                <span class="dashicons dashicons-controls-play"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="whatslink-alert center">
                        <h3 class="whatslink-alert-header">
                            <?php _e('¡Hey! Aqui esta tu link de WhatsApp.','whatslink'); ?>
                        </h3>
                        <div>
                            <p>link</p>
                        </div>
                        <button class="form" type="button" id="copy"><?php _e('Copiar','whatslink'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>