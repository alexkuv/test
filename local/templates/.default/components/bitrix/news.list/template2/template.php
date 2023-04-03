<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php foreach ($arResult["ITEMS"] as $key => $arItem) {
    $unixDate = MakeTimeStamp($arItem["TIMESTAMP_X"], "DD.MM.YYYY HH:MI:SS");

    if ($key === 0) { ?>
      <article class="news-important" style="background-image: url(<?php echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>)">
        <a href="/article.html" class="news-important__link">
          <h2 class="news-important__title">
              <?php echo !empty($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : $arItem["NAME"] ?>
          </h2>
        </a>
        <time class="news-important__publication-date" datetime="<?php echo FormatDate('Y-m-d', $unixDate) ?>">
            <?php echo FormatDate('j F Y', $unixDate) ?>
        </time>
      </article>
    <?php } else { ?>
      <article class="news news--wide">
        <div class="news__publication-info">
          <a href="/article.html" class="news__link content-block">
            <h3 class="news__title content-block">
                <?php echo !empty($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : $arItem["NAME"] ?>
            </h3>
          </a>
          <time class="news__publication-date" datetime="<?php echo FormatDate('Y-m-d', $unixDate) ?>">
              <?php echo FormatDate('j F Y', $unixDate) ?>
          </time>
        </div>
        <div class="news__illustration"
             style="background-image: url(<?php echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>)"></div>
      </article>
    <?php } ?>
<?php } ?>
