<?php
$altAndTitle = "Cita";
if ($laguaje == "en") {
    $altAndTitle = "Quote";
}
?>
<style>
    .quote {
        width: 100%;
        margin: 120px 0px 0px 0px;
        display: flex;
        flex-flow: column nowrap;
        gap: 40px;
        justify-content: center;
        align-items: center;
    }

    .quote>.mutanto__elements-bgLine {
        margin: 0px;
    }


    .quote h4 {
        margin-top: 32px 0 0 0 !important;
        font-size: 20px;
    }

    .quote span {
        color: #878787 !important;
    }

    .mutanto__elements--cliente-comment-quotes-structure {
        display: flex;
        width: auto;
        flex-flow: row nowrap;
        gap: 40px;
        margin-bottom: 40px;
        margin-top: 40px;
        justify-content: center;
    }

    .mutanto__elements--cliente-comment-quotes-comment {
        width: 862px;
    }

    .mutanto__elements-bgLine {
        margin: 20px;
        width: 80vw;
        height: 1px;
        margin-left: auto;
        margin-right: auto;
        background: linear-gradient(270deg, rgba(132, 255, 95, 0.00) -0.53%, #84FF5F 48.82%, rgba(132, 255, 95, 0.00) 99.91%);
    }

    @media (min-width : 1200px) {

        .quote p {
            font-size: 20px;
            margin: 0px;
            padding: 0px;
        }

    }


    @media (max-width : 1199px) and (min-width: 577px) {

        .quote {
            width: 75%;
        }

        .mutanto__elements--cliente-comment-quotes-comment {
            width: 100%;
        }

        .quote p {
            font-size: 20px;
            margin: 0px;
            padding: 0px;
        }

        .quote h4 {
            margin-top: 32px 0 0 0 !important;
            font-size: 20px;
        }

    }


    @media (max-width : 576px) {

        .quote {
            gap: 0px;
        }

        .mutanto__elements--cliente-comment-quotes-structure {
            flex-flow: column nowrap;
        }

        .mutanto__elements--cliente-comment-quotes-comment {
            width: 100%;
        }

        .quote p {
            font-size: 16px;
            margin: 0px;
            padding: 0px;
        }

        .quote h4 {
            margin-top: 32px 0 0 0 !important;
            font-size: 16px;
        }

        .mutanto__elements-bgLine {
            width: 100%;
        }

    }
</style>
<div class="quote">
    <div class="mutanto__elements-bgLine"></div>
    <div class="mutanto__elements--cliente-comment">
        <div class="mutanto__elements--cliente-comment-quotes-structure">
            <div class="mutanto__elements--cliente-comment-quotes-icons"><img src="<?= (URL_SITE) ?>img/quotes.svg" alt="<?php echo ($altAndTitle) ?>" title="<?php echo ($altAndTitle) ?>"></div>
            <div class="mutanto__elements--cliente-comment-quotes-comment">
                <p class="blancoMuntanto"><?php echo ($quoteText) ?></p>
                <h4><strong class="blancoMuntanto"><?php echo ($quoteAuthor) ?></strong><br>
                    <span><?php echo ($quotePosition) ?></span>
                </h4>
            </div>
        </div>
    </div>
    <div class="mutanto__elements-bgLine"></div>
</div>