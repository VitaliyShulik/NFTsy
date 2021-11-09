<style type="text/css" type="scope">
    .nft-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10000;
        background-color: rgb(255 255 255 / 80%);
    }

    .nft-overlay.visible {
        display: block;
    }

    .nft-loader {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 40px;
        height: 40px;
        background-color: #313131;
        animation: rectangle 1.5s infinite ease-in-out;
    }

    @keyframes rectangle {
        0% {
            transform:perspective(12rem) rotateX(0deg) rotateY(0deg)
        }
        50% {
            transform:perspective(12rem) rotateX(-180.1deg) rotateY(0deg)
        }
        100% {
            transform:perspective(12rem) rotateX(-180deg) rotateY(-179.9deg)
        }
    }
</style>

<div class="wrap">
    <div class="welcome-panel">
        <h2>test</h2>
        <?php esc_html_e('First of all please','rarible'); ?> <a href="update-core.php?force-check=1"><?php esc_html_e('check for updates','rarible'); ?></a>.
        <?php esc_html_e('How to use? Add [nft_addform] to a page where to show "add" form. Add [nft_view_shortcode] to a page where to show the catalog:','rarible'); ?><Br>
        <br><br>
        <h2><?php esc_html_e('General settings', 'rarible'); ?></h2>
        <div class="welcome-panel-column-container nft-panel-tab panel-tab-active" id="nft-tab-1">
            <div class="nft-shortcode-panel-row">
                <form action="#" method="post" class="wp-nft-widget-form">
                    <table class="form-table">
                        <tbody>

                        <tr>
                            <th scope="row">
                                <label><?php esc_html_e('Newtwork ', 'rarible'); ?></label>
                            </th>
                            <td>
                                <div class="nft-form-inline"><?php
                                    $nft_network = get_option('rarible_nft_networkName','ropsten');
                                    ?>
                                    <select
                                            name="rarible_nft_networkName">
                                        <option <?php selected($nft_network,'ropsten' ) ;  ?>>ropsten</option>
                                        <option <?php selected($nft_network,'mainnet' ) ;  ?>  >mainnet</option>
                                        <option <?php selected($nft_network,'rinkeby' ) ;  ?> >rinkeby</option>
                                        <option <?php selected($nft_network,'bsc' ) ;  ?> >bsc</option>

                                        <option <?php selected($nft_network,'bsc_test' ) ;  ?> >bsc_test</option>
                                    </select>
                                    <br>
                                    <?php esc_html_e('Ropsten or Mainnet. We recommend to test on testnet with testnet tokens before launch', 'rarible'); ?>
                                </div>
                            </td>
                        </tr>



                        <tr>
                            <th scope="row"></th>
                            <td>
                                <input type="submit" name="mcwallet-add-token"
                                       class="button button-primary mcwallet-add-token"
                                       value="<?php esc_attr_e('Save', 'rarible'); ?>">
                                <span class="spinner"></span>
                                <br>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>

    <div id="nft_loaderOverlay" class="nft-overlay">
        <div class="nft-loader"></div>
    </div>
</div>
