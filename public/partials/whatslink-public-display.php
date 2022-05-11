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
<div>
    <div class="row">
        <p>https://crear.wa.link/</p>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="whatslink">
                <form>
                    <div class="row">
                        <div class="col-12">
                            <label class="form">Codigo de Region</label>
                            <select class="form">
                                <option>Select</option>
                                <option>First option</option>
                                <option>Second option</option>
                            </select>
                            <span
                                class="form"><?php _e('Recuerda confirmar el código de tu país.','whatslink'); ?></span>
                        </div>
                        <div class="col-12">
                            <label class='form'>Numero de WhatsApp</label>
                            <input type='phone' class='form'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label class="form">Saludo del Usuario</label>
                            <textarea class="form"></textarea>
                            <span
                                class="form"><?php _e('Por ejemplo: “Hola, quiero más información sobre el producto”','whatslink'); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="form full" type="button">Generar Link</button>
                        </div>
                        <div class="col-12">
                            <button class="form success full" type="button">Generar QR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1">
            <div class="row">
                <span class="dashicons dashicons-arrow-right-alt2"></span>
            </div>
        </div>
        <div class="col-5">
            <div class="whatslink-phone">
                <div class="row whatslink-phone-head">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyAgUFVCTElDICctLy9XM0MvL0RURCBTVkcgMS4xLy9FTicgICdodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQnPgo8c3ZnIHdpZHRoPSI0MDFweCIgaGVpZ2h0PSI0MDFweCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAzMTIuODA5IDAgNDAxIDQwMSIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIzMTIuODA5IDAgNDAxIDQwMSIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgdHJhbnNmb3JtPSJtYXRyaXgoMS4yMjMgMCAwIDEuMjIzIC00NjcuNSAtODQzLjQ0KSI+Cgk8cmVjdCB4PSI2MDEuNDUiIHk9IjY1My4wNyIgd2lkdGg9IjQwMSIgaGVpZ2h0PSI0MDEiIGZpbGw9IiNFNEU2RTciLz4KCTxwYXRoIGQ9Im04MDIuMzggOTA4LjA4Yy04NC41MTUgMC0xNTMuNTIgNDguMTg1LTE1Ny4zOCAxMDguNjJoMzE0Ljc5Yy0zLjg3LTYwLjQ0LTcyLjktMTA4LjYyLTE1Ny40MS0xMDguNjJ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBkPSJtODgxLjM3IDgxOC44NmMwIDQ2Ljc0Ni0zNS4xMDYgODQuNjQxLTc4LjQxIDg0LjY0MXMtNzguNDEtMzcuODk1LTc4LjQxLTg0LjY0MSAzNS4xMDYtODQuNjQxIDc4LjQxLTg0LjY0MWM0My4zMSAwIDc4LjQxIDM3LjkgNzguNDEgODQuNjR6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPC9zdmc+Cg=="
                        alt="profile" class="whatslink-profile">
                </div>
                <div class="row whatslink-phone-body">
                    <p class="whatslink-phone-message">wfefmwekkfmwkfk</p>
                </div>
                <div class="row whatslink-phone-footer">
                    <div class="field">
                        <input type="text" name="" id="">
                        <span class="dashicons dashicons-controls-play"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>