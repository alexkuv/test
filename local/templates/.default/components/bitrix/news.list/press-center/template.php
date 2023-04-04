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

<section class="press-center">
  <header class="go-to-section">
    <a href="/<?php echo $arResult["CODE"] ?>" class="go-to-section__link">
      <h2 class="go-to-section__title">Новости</h2>
      <span class="go-to-link">
            Все новости
            <svg class="icon" role="img"><use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow"/></svg>
          </span>
    </a>
  </header>
  <div class="press-center__articles press-center__articles--dense-list">
    <?php foreach ($arResult["ITEMS"] as $key => $arItem) {
        if ($key === 0) { ?>
          <article class="news-important" style="background-image: url(<?php echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>)">
            <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="news-important__link">
              <h2 class="news-important__title">
                  <?php echo !empty($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : $arItem["NAME"] ?>
              </h2>
            </a>
            <time class="news-important__publication-date" datetime="<?php echo FormatDateFromDB($arItem["TIMESTAMP_X"], "YYYY-MM-DD") ?>">
                <?php echo FormatDateFromDB($arItem["TIMESTAMP_X"], "DD MMMM YYYY") ?>
            </time>
          </article>
        <?php } else { ?>
          <article class="news">
            <a href="<?php echo $arItem["DETAIL_PAGE_URL"] ?>" class="news__link">
              <h4 class="news__title">
                  <?php echo !empty($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : $arItem["NAME"] ?>
              </h4>
            </a>
            <div class="news__illustration" style="background-image: url(<?php echo $arItem["PREVIEW_PICTURE"]["SRC"]; ?>)"></div>
            <div class="news__publication-info">
              <time class="news__publication-date" datetime="<?php echo FormatDateFromDB($arItem["TIMESTAMP_X"], "YYYY-MM-DD") ?>">
                  <?php echo FormatDateFromDB($arItem["TIMESTAMP_X"], "DD MMMM YYYY") ?>
              </time>
            </div>
          </article>
        <?php } ?>
    <?php } ?>
  </div>
</section>
