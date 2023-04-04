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

<section class="article">
  <header class="article__header">
    <h1 class="article__title"><?=$arResult["NAME"]?></h1>
    <time class="article__publication-date" datetime="<?php echo FormatDateFromDB($arResult["ACTIVE_FROM"], "YYYY-MM-DD") ?>">
      <?php echo FormatDateFromDB($arResult["ACTIVE_FROM"], "DD MMMM YYYY") ?>
    </time>
    <a class="back-link" href="<?php echo $arResult["LIST_PAGE_URL"] ?>">
      <svg class="icon" role="img">
        <use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow" /></svg>
      Пресс-центр
    </a>
  </header>
  <?php if (!empty($arResult["PROPERTIES"]["LEAD"]["VALUE"]["TEXT"])) { ?>
    <div class="article__content-wrapper">
      <div class="article__lead content-block">
          <?php echo htmlspecialchars_decode($arResult["PROPERTIES"]["LEAD"]["VALUE"]["TEXT"]) ?>
      </div>
    </div>
  <?php } ?>
  <div class="article__content-wrapper">
    <div class="article__content content-block">
      <?php if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) { ?>
        <img src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?php echo $arResult["META_TAGS"]["TITLE"] ?>">
      <?php } ?>
      <?php if (!empty($arResult["DETAIL_PICTURE"]["DESCRIPTION"])) { ?>
        <div class="image-caption">
            <?php echo $arResult["DETAIL_PICTURE"]["DESCRIPTION"] ?>
        </div>
      <?php } ?>
      <?php echo htmlspecialchars_decode($arResult["DETAIL_TEXT"]) ?>
    </div>
  </div>
</section>
