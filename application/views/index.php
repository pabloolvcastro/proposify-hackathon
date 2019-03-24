<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Pitch Perfect Software Inc.">
    <meta name="description" content="Create beautiful proposals, streamline them in the cloud, and get faster sign-off with online signatures. Try Proposify proposal software free for 14 days.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <link rel="shortcut icon" href="https://app.proposify.com/favicon.ico">
    <link rel="mask-icon" href="https://app.proposify.com/files/cache/20407/system/img/proposify-cup.svg" color="#00D9A3">
    <link rel="apple-touch-icon" href="https://app.proposify.com/files/cache/20407/system/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://app.proposify.com/files/cache/20407/system/img/touch-icon-ipad-retina.png">
    <meta property="og:title" content="Proposal Software | Proposify">
    <meta property="og:type" content="website">
    <meta property="og:image" content="//app.proposify.com/files/cache/20407/system/img/opengraph-proposify.png">
    <meta property="og:url" content="https://www.proposify.com/">
    <meta property="og:description" content="Create beautiful proposals, streamline them in the cloud, and get faster sign-off with online signatures. Try Proposify proposal software free for 14 days.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@proposify">
    <meta name="twitter:title" content="Proposal Software | Proposify">
    <meta name="twitter:description" content="Create beautiful proposals, streamline them in the cloud, and get faster sign-off with online signatures. Try Proposify proposal software free for 14 days.">
    <meta name="twitter:image" content="//app.proposify.com/files/cache/20407/system/img/opengraph-proposify.png">
    <title>Templates</title>
    <link type="text/css" rel="stylesheet" href="<?= base_url('./assets/index.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('./assets/font.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('./assets/page_style.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('./assets/saved.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('./assets/loaded.css') ?>">
</head>
<body>
<div class="container-fluid">
    <div class="content">
        <div id="pyModule">
            <div id="pyTemplateLibraryPage" class="container-lg">
                <header><h1>Templates</h1>
                    <p>A template is a pre-made proposal you can use to get started right away.</p></header>
                <div class="border">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="" class="text-uppercase cinder"><span class="role-label">Imported</span></a></li>
                        <li role="presentation" class=""><a href="#" class="text-uppercase cinder"><span class="role-label">Saved</span></a></li>
                        <li role="presentation"><a href="#" class="text-uppercase cinder"><span class="role-label">Gallery</span></a></li>
                    </ul>
                </div>
                <div style="margin-bottom: 20px;"><?= ($message) ?></div>
                <div id="pyTemplateArea" class="row">
                    <div class="col-xs-3 template box text-center">
                        <div>

                            <a id="add_template" class="new cinder">
                                <div><span class="btn-label">Import file</span></div>
                            </a>
                            <form action="<?= base_url('homeController/file_upload') ?>" method="post" enctype="multipart/form-data" id="import_template" hidden>
                                <input type="file" id="userfile" name="userfile">
                            </form>
                        </div>
                    </div>

                    <?php foreach ($files as $key => $value): ?>
                        <?php
                        $creation_date = filectime($value);
                        $value = str_replace('./uploads/', '', $value);
                        ?>

                        <div class="col-xs-3 template portrait edit " data-id="1950633" data-category-id-0="">
                            <div class="thumbnail thumbnail-info"><a href="#" data-container="div.template[data-id='1950633']" data-condition="handleTemplateDefaultButtonClick" data-success="handleTemplateDefault" data-loader="none" data-toggle="tooltip" data-placement="top" data-title="This flag means this template is your default template. The content library uses your default template to format page setup, repeaters, and text styles." class="template-flag cinder" data-original-title="" title="">
                                    <div></div>
                                </a>
                                <div class="thumbnail-overlay">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group" role="group"><a href="#" data-modal="handleDuplicateTemplateButtonClick" class="btn btn-link btn-sm btn-svg cinder" data-toggle="tooltip" title="" data-original-title="Duplicate"></a></div>
                                        <div class="btn-group"><a href="#" data-container="div.template[data-id='1950633']" data-callback="handleTemplateDeleteButtonClick" class="btn btn-link btn-sm btn-svg cinder" data-toggle="tooltip" title="" data-original-title="Delete"></a></div>
                                    </div>
                                    <a href="#" class="btn btn-default btn-block cinder"><span class="btn-label">Edit Template</span></a></div>
                                <a href="#" class="image"><img src="https://baldavira.proposify.com/files/cache/system/img/no-thumb.gif"></a>
                                <div class="caption">
                                    <form method="post" action="//baldavira.proposify.com/template/rename/1950633" data-success="handleTemplateRename" class="cinder" novalidate="novalidate">
                                        <div class="input-group has-feedback"><input type="text" name="name" placeholder="Template name" value="Template Name" class="input-xs form-control input-tooltip"><span class="input-group-btn"><a href="#" data-callback="toggleTemplateRenameForm" class="text-default form-control-feedback cinder"></a><button type="submit" class="btn btn-primary btn-svg btn-xs"></button></span></div>
                                    </form>
                                    <a href="#" data-callback="toggleTemplateRenameForm" class="cinder"><h4><?= $value ?></h4></a>
                                    <p>Created: <?= date('M d, Y', $creation_date) ?></p></div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    const input = document.querySelector(`#userfile`);

    document.querySelector(`#add_template`).onclick = () => {
        input.click();
    };

    input.onchange = () => {
        if (input.files.length) {
            document.querySelector(`#import_template`).submit();
        }
    }
</script>
</body>
</html>