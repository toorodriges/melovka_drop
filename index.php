<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
</head>
<body>
	<style>
/*
 * The MIT License
 * Copyright (c) 2012 Matias Meno <m@tias.me>
 */
@-webkit-keyframes passing-through {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30%, 70% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-40px);
    -moz-transform: translateY(-40px);
    -ms-transform: translateY(-40px);
    -o-transform: translateY(-40px);
    transform: translateY(-40px); } }
@-moz-keyframes passing-through {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30%, 70% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-40px);
    -moz-transform: translateY(-40px);
    -ms-transform: translateY(-40px);
    -o-transform: translateY(-40px);
    transform: translateY(-40px); } }
@keyframes passing-through {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30%, 70% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-40px);
    -moz-transform: translateY(-40px);
    -ms-transform: translateY(-40px);
    -o-transform: translateY(-40px);
    transform: translateY(-40px); } }
@-webkit-keyframes slide-in {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); } }
@-moz-keyframes slide-in {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); } }
@keyframes slide-in {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
    -moz-transform: translateY(40px);
    -ms-transform: translateY(40px);
    -o-transform: translateY(40px);
    transform: translateY(40px); }
  30% {
    opacity: 1;
    -webkit-transform: translateY(0px);
    -moz-transform: translateY(0px);
    -ms-transform: translateY(0px);
    -o-transform: translateY(0px);
    transform: translateY(0px); } }
@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); }
  10% {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1); }
  20% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); } }
@-moz-keyframes pulse {
  0% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); }
  10% {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1); }
  20% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); } }
@keyframes pulse {
  0% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); }
  10% {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1); }
  20% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); } }
.dropzone, .dropzone * {
  box-sizing: border-box; }

.dropzone {
  min-height: 150px;
  border: 2px solid rgba(0, 0, 0, 0.3);
  background: white;
  padding: 20px 20px; }
  .dropzone.dz-clickable {
    cursor: pointer; }
    .dropzone.dz-clickable * {
      cursor: default; }
    .dropzone.dz-clickable .dz-message, .dropzone.dz-clickable .dz-message * {
      cursor: pointer; }
  .dropzone.dz-started .dz-message {
    display: none; }
  .dropzone.dz-drag-hover {
    border-style: solid; }
    .dropzone.dz-drag-hover .dz-message {
      opacity: 0.5; }
  .dropzone .dz-message {
    text-align: center;
    margin: 2em 0; }
  .dropzone .dz-preview {
    position: relative;
    display: inline-block;
    vertical-align: top;
    margin: 16px;
    min-height: 100px; }
    .dropzone .dz-preview:hover {
      z-index: 1000; }
      .dropzone .dz-preview:hover .dz-details {
        opacity: 1; }
    .dropzone .dz-preview.dz-file-preview .dz-image {
      border-radius: 20px;
      background: #999;
      background: linear-gradient(to bottom, #eee, #ddd); }
    .dropzone .dz-preview.dz-file-preview .dz-details {
      opacity: 1; }
    .dropzone .dz-preview.dz-image-preview {
      background: white; }
      .dropzone .dz-preview.dz-image-preview .dz-details {
        -webkit-transition: opacity 0.2s linear;
        -moz-transition: opacity 0.2s linear;
        -ms-transition: opacity 0.2s linear;
        -o-transition: opacity 0.2s linear;
        transition: opacity 0.2s linear; }
    .dropzone .dz-preview .dz-remove {
      font-size: 14px;
      text-align: center;
      display: block;
      cursor: pointer;
      border: none; }
      .dropzone .dz-preview .dz-remove:hover {
        text-decoration: underline; }
    .dropzone .dz-preview:hover .dz-details {
      opacity: 1; }
    .dropzone .dz-preview .dz-details {
      z-index: 20;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      font-size: 13px;
      min-width: 100%;
      max-width: 100%;
      padding: 2em 1em;
      text-align: center;
      color: rgba(0, 0, 0, 0.9);
      line-height: 150%; }
      .dropzone .dz-preview .dz-details .dz-size {
        margin-bottom: 1em;
        font-size: 16px; }
      .dropzone .dz-preview .dz-details .dz-filename {
        white-space: nowrap; }
        .dropzone .dz-preview .dz-details .dz-filename:hover span {
          border: 1px solid rgba(200, 200, 200, 0.8);
          background-color: rgba(255, 255, 255, 0.8); }
        .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
          overflow: hidden;
          text-overflow: ellipsis; }
          .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
            border: 1px solid transparent; }
      .dropzone .dz-preview .dz-details .dz-filename span, .dropzone .dz-preview .dz-details .dz-size span {
        background-color: rgba(255, 255, 255, 0.4);
        padding: 0 0.4em;
        border-radius: 3px; }
    .dropzone .dz-preview:hover .dz-image img {
      -webkit-transform: scale(1.05, 1.05);
      -moz-transform: scale(1.05, 1.05);
      -ms-transform: scale(1.05, 1.05);
      -o-transform: scale(1.05, 1.05);
      transform: scale(1.05, 1.05);
      -webkit-filter: blur(8px);
      filter: blur(8px); }
    .dropzone .dz-preview .dz-image {
      border-radius: 20px;
      overflow: hidden;
      width: 120px;
      height: 120px;
      position: relative;
      display: block;
      z-index: 10; }
      .dropzone .dz-preview .dz-image img {
        display: block; }
    .dropzone .dz-preview.dz-success .dz-success-mark {
      -webkit-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: passing-through 3s cubic-bezier(0.77, 0, 0.175, 1); }
    .dropzone .dz-preview.dz-error .dz-error-mark {
      opacity: 1;
      -webkit-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -moz-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -ms-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      -o-animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1);
      animation: slide-in 3s cubic-bezier(0.77, 0, 0.175, 1); }
    .dropzone .dz-preview .dz-success-mark, .dropzone .dz-preview .dz-error-mark {
      pointer-events: none;
      opacity: 0;
      z-index: 500;
      position: absolute;
      display: block;
      top: 50%;
      left: 50%;
      margin-left: -27px;
      margin-top: -27px; }
      .dropzone .dz-preview .dz-success-mark svg, .dropzone .dz-preview .dz-error-mark svg {
        display: block;
        width: 54px;
        height: 54px; }
    .dropzone .dz-preview.dz-processing .dz-progress {
      opacity: 1;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear; }
    .dropzone .dz-preview.dz-complete .dz-progress {
      opacity: 0;
      -webkit-transition: opacity 0.4s ease-in;
      -moz-transition: opacity 0.4s ease-in;
      -ms-transition: opacity 0.4s ease-in;
      -o-transition: opacity 0.4s ease-in;
      transition: opacity 0.4s ease-in; }
    .dropzone .dz-preview:not(.dz-processing) .dz-progress {
      -webkit-animation: pulse 6s ease infinite;
      -moz-animation: pulse 6s ease infinite;
      -ms-animation: pulse 6s ease infinite;
      -o-animation: pulse 6s ease infinite;
      animation: pulse 6s ease infinite; }
    .dropzone .dz-preview .dz-progress {
      opacity: 1;
      z-index: 1000;
      pointer-events: none;
      position: absolute;
      height: 16px;
      left: 50%;
      top: 50%;
      margin-top: -8px;
      width: 80px;
      margin-left: -40px;
      background: rgba(255, 255, 255, 0.9);
      -webkit-transform: scale(1);
      border-radius: 8px;
      overflow: hidden; }
      .dropzone .dz-preview .dz-progress .dz-upload {
        background: #333;
        background: linear-gradient(to bottom, #666, #444);
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 0;
        -webkit-transition: width 300ms ease-in-out;
        -moz-transition: width 300ms ease-in-out;
        -ms-transition: width 300ms ease-in-out;
        -o-transition: width 300ms ease-in-out;
        transition: width 300ms ease-in-out; }
    .dropzone .dz-preview.dz-error .dz-error-message {
      display: block; }
    .dropzone .dz-preview.dz-error:hover .dz-error-message {
      opacity: 1;
      pointer-events: auto; }
    .dropzone .dz-preview .dz-error-message {
      pointer-events: none;
      z-index: 1000;
      position: absolute;
      display: block;
      display: none;
      opacity: 0;
      -webkit-transition: opacity 0.3s ease;
      -moz-transition: opacity 0.3s ease;
      -ms-transition: opacity 0.3s ease;
      -o-transition: opacity 0.3s ease;
      transition: opacity 0.3s ease;
      border-radius: 8px;
      font-size: 13px;
      top: 130px;
      left: -10px;
      width: 140px;
      background: #be2626;
      background: linear-gradient(to bottom, #be2626, #a92222);
      padding: 0.5em 1.2em;
      color: white; }
      .dropzone .dz-preview .dz-error-message:after {
        content: '';
        position: absolute;
        top: -6px;
        left: 64px;
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #be2626; }

</style>

<style>
<style>
.product-toolbar{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;background:#f9f9f9;padding:30px 50px;max-width:760px;margin:0 auto;-ms-flex-align:center;align-items:center}@media only screen and (max-width:680px){.product-toolbar{padding:10px 5px;-ms-flex-direction:column;flex-direction:column}}.product-toolbar__note{text-align:center;font-size:12px;color:#999;margin-right:10px;white-space:nowrap}@media only screen and (max-width:680px){.product-toolbar__note{-ms-flex-preferred-size:100%;flex-basis:100%}}.product-toolbar__item{display:inline-block;margin-right:20px}@media only screen and (max-width:680px){.product-toolbar__item{display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;margin-right:0;width:100%;margin-bottom:.5em}}.product-toolbar__item.right{-ms-flex-positive:1;flex-grow:1;width:100%;-ms-flex-line-pack:center;align-content:center;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap}@media only screen and (max-width:680px){.product-toolbar__item.right{-ms-flex-pack:center;justify-content:center}}.product-toolbar__item.buttons{display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-ms-flex-direction:row;flex-direction:row;-ms-flex-line-pack:center;align-content:center;-ms-flex-align:center;align-items:center}@media only screen and (max-width:680px){.product-toolbar__item.buttons{width:100%;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center}}.product-toolbar__btn{border:none;cursor:pointer}.product-toolbar__btn:disabled{background:#ccc;cursor:inherit}.product-toolbar__btn.margin{margin-right:10px}.product-toolbar__info{font-size:18px}@media only screen and (max-width:680px){.product-toolbar__info{font-size:12px}}.product-toolbar__link{outline:0;font-size:14px;color:#2747ae;margin-left:10px;padding-left:10px;border-left:1px solid #000;border-top:0 none;border-right:0 none;border-bottom:0 none;text-decoration:underline;background:0 0;cursor:pointer}.product-item{margin:10px;display:-ms-flexbox;display:flex;position:relative;text-decoration:none}.product-item:hover .product-item__edit,.product-item:hover .product-item__remove{visibility:visible;opacity:1}.product-item--over{opacity:.1}.product-item--dragging{background:0 0}.product-item--dragging .product-item__edit,.product-item--dragging .product-item__remove{visibility:hidden!important;opacity:0!important}.product-item__svg{width:100%;height:100%}.product-item svg{background:#fff;border:1px solid #ccc;box-shadow:0 4px 12px 0 rgba(0,0,0,.3)}.product-item__page-num{font-size:10px;color:#9e9e9e;display:block;text-align:center;position:absolute;bottom:-20px;left:50%}.product-item__quality{visibility:visible;opacity:1;position:absolute;bottom:10px;right:10px;z-index:1000;color:#fd8167;cursor:help}.product-item__remove{border-radius:17px;right:-10px;color:#ed5650;border:none}.product-item__edit,.product-item__remove{font-size:14px;position:absolute;background:#fff;visibility:hidden;opacity:0;transition:opacity .2s linear;top:-10px;display:block;height:33px;text-align:center;line-height:33px!important;width:33px;z-index:1000;box-shadow:0 2px 4px 0 rgba(0,0,0,.3);cursor:pointer;text-decoration:none;padding:0}.product-item__edit{border-radius:17px;left:-10px;color:#2747ae}.draggable-photo .product-item{margin:0}.dummy-page{background:#fff;border:1px solid #ccc;box-shadow:0 4px 12px 0 rgba(0,0,0,.3);display:-ms-flexbox;display:flex;-ms-flex-line-pack:center;align-content:center;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}@media only screen and (max-width:680px){.dummy-page{width:30px!important;box-shadow:5px 4px 12px 0 rgba(0,0,0,.3);border-left:0}}@media only screen and (max-width:680px){.dummy-page--last{box-shadow:-5px 4px 12px 0 rgba(0,0,0,.3);border-right:0}}.dummy-page__text{font-family:periodica,sans-serif;color:#c9c9c9;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0}@media only screen and (max-width:680px){.dummy-page__text{display:none}}.book-photos-list{padding-bottom:40px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;-ms-flex-align:start;align-items:flex-start}.book-photos-list__header{-ms-flex-preferred-size:100%;flex-basis:100%;text-align:center}.book-photos-list__item{margin-bottom:45px}.book-photos-list__item:nth-child(odd){-ms-flex-preferred-size:50%;flex-basis:50%;text-align:left}.book-photos-list__item:nth-child(2n){-ms-flex-preferred-size:50%;flex-basis:50%;text-align:right}.book-photos-list__item:first-child{-ms-flex-preferred-size:100%;flex-basis:100%;text-align:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-ms-flex-pack:center;justify-content:center}@media only screen and (max-width:680px){.book-photos-list__item:first-child{-ms-flex-preferred-size:calc(50% + 30px);flex-basis:calc(50% + 30px)}}.book-photos-list__item:nth-child(40){-ms-flex-preferred-size:100%;flex-basis:100%;text-align:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-ms-flex-pack:center;justify-content:center}@media only screen and (max-width:680px){.book-photos-list__item:nth-child(40){-ms-flex-preferred-size:calc(50% + 30px);flex-basis:calc(50% + 30px)}}@media only screen and (max-width:680px){.book-photos-list__item--with-dummy .book-photos-list__wrapper{width:calc(100% - 30px)}}.book-photos-list__item--center{text-align:center!important}.book-photos-list__wrapper{display:inline-block;max-width:300px;position:relative}@media only screen and (max-width:680px){.book-photos-list__wrapper{display:block}}.book-cover{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;-ms-flex-align:start;align-items:flex-start;width:100%;max-width:300px;padding-bottom:60px;margin:0 auto}@media only screen and (max-width:680px){.book-cover{padding-bottom:20px;width:50%}}.book-cover>a{margin:0}.product-actions{width:600px;margin:20px auto}@media only screen and (max-width:680px){.product-actions{display:none}}.product-actions__item{font-size:14px;color:#6d6d6d;margin:10px 0;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.product-actions__item--warning{color:#fd8167}.product-actions__icon{color:#2747ae;font-size:32px;margin-right:20px}.product-actions__icon--warning{color:#fd8167}.approve-product__wrapper{width:100%;max-width:500px;margin:0 auto;text-align:left}.approve-product__label{margin:0}.approve-product__checkbox{margin:0 5px 0 0}.approve-product__note{font-size:14px;margin-top:7px;color:#6d6d6d}.base-book{background:#f9f9f9;min-height:100%}.base-book__editor{padding:80px}@media only screen and (max-width:680px){.base-book__editor{padding:20px 10px}}.base-book__header{-ms-flex-preferred-size:100%;flex-basis:100%;text-align:center}.base-book__note{text-align:center;color:#c9c9c9;padding:20px 0;margin:0}.edit-toolbar{font-family:periodica,sans-serif}.edit-toolbar__header{background:#fff;border-bottom:1px solid #f0f0f0;padding:10px 0;text-align:center;height:33px;width:100%;position:relative}.edit-toolbar__counter{margin:0;padding:0;line-height:33px}@media only screen and (max-width:680px){.edit-toolbar__counter{display:none}}.edit-toolbar__close{position:absolute;right:10px;top:10px}.edit-toolbar__tools{background:#f9f9f9;width:100%;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding:10px 0;border-bottom:1px solid #f0f0f0}.edit-toolbar__tool,.edit-toolbar__tools{display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;-ms-flex-align:center;align-items:center}.edit-toolbar__tool{line-height:inherit;text-align:center;padding:0 10px;border-right:1px solid #d8d8d8;list-style:none;vertical-align:top}.edit-toolbar__tool:last-child{border-right:none}@media only screen and (max-width:680px){.edit-toolbar__tool{-ms-flex-positive:1;flex-grow:1;padding:0}}.edit-toolbar__btn{font-family:periodica,sans-serif;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;position:relative;padding:0 20px;line-height:34px;font-weight:400;font-size:15px;color:#6d6d6d;text-decoration:none;vertical-align:top}.edit-toolbar__btn--disabled{color:#ccc;cursor:default}@media only screen and (max-width:680px){.edit-toolbar__btn{font-size:12px;line-height:inherit}}.photo-warning{padding:10px;margin-bottom:15px;background:#fee0a5;font-size:12px;color:#6d6d6d}.photo-warning__icon{color:#fd8167}.photo-warning__quality{text-align:left}.rc-slider{position:relative;height:14px;padding:5px 0;width:100%;border-radius:6px;-ms-touch-action:none;touch-action:none}.rc-slider,.rc-slider *{box-sizing:border-box;-webkit-tap-highlight-color:transparent}.rc-slider-rail{width:100%;background-color:#e9e9e9}.rc-slider-rail,.rc-slider-track{position:absolute;height:4px;border-radius:6px}.rc-slider-track{left:0;background-color:#abe2fb}.rc-slider-handle{position:absolute;margin-left:-7px;margin-top:-5px;width:14px;height:14px;cursor:pointer;cursor:-webkit-grab;cursor:grab;border-radius:50%;border:2px solid #96dbfa;background-color:#fff;-ms-touch-action:pan-x;touch-action:pan-x}.rc-slider-handle:focus{border-color:#57c5f7;box-shadow:0 0 0 5px #96dbfa;outline:0}.rc-slider-handle-click-focused:focus{border-color:#96dbfa;box-shadow:unset}.rc-slider-handle:hover{border-color:#57c5f7}.rc-slider-handle:active{border-color:#57c5f7;box-shadow:0 0 5px #57c5f7;cursor:-webkit-grabbing;cursor:grabbing}.rc-slider-mark{position:absolute;top:18px;left:0;width:100%;font-size:12px}.rc-slider-mark-text{position:absolute;display:inline-block;vertical-align:middle;text-align:center;cursor:pointer;color:#999}.rc-slider-mark-text-active{color:#666}.rc-slider-step{position:absolute;width:100%;height:4px;background:0 0}.rc-slider-dot{position:absolute;bottom:-2px;margin-left:-4px;width:8px;height:8px;border:2px solid #e9e9e9;background-color:#fff;cursor:pointer;border-radius:50%;vertical-align:middle}.rc-slider-dot-active{border-color:#96dbfa}.rc-slider-disabled{background-color:#e9e9e9}.rc-slider-disabled .rc-slider-track{background-color:#ccc}.rc-slider-disabled .rc-slider-dot,.rc-slider-disabled .rc-slider-handle{border-color:#ccc;box-shadow:none;background-color:#fff;cursor:not-allowed}.rc-slider-disabled .rc-slider-dot,.rc-slider-disabled .rc-slider-mark-text{cursor:not-allowed!important}.rc-slider-vertical{width:14px;height:100%;padding:0 5px}.rc-slider-vertical .rc-slider-rail{height:100%;width:4px}.rc-slider-vertical .rc-slider-track{left:5px;bottom:0;width:4px}.rc-slider-vertical .rc-slider-handle{margin-left:-5px;margin-bottom:-7px;-ms-touch-action:pan-y;touch-action:pan-y}.rc-slider-vertical .rc-slider-mark{top:0;left:18px;height:100%}.rc-slider-vertical .rc-slider-step{height:100%;width:4px}.rc-slider-vertical .rc-slider-dot{left:2px;margin-bottom:-4px}.rc-slider-vertical .rc-slider-dot:first-child,.rc-slider-vertical .rc-slider-dot:last-child{margin-bottom:-4px}.rc-slider-tooltip-zoom-down-appear,.rc-slider-tooltip-zoom-down-enter,.rc-slider-tooltip-zoom-down-leave{animation-duration:.3s;animation-fill-mode:both;display:block!important;animation-play-state:paused}.rc-slider-tooltip-zoom-down-appear.rc-slider-tooltip-zoom-down-appear-active,.rc-slider-tooltip-zoom-down-enter.rc-slider-tooltip-zoom-down-enter-active{animation-name:rcSliderTooltipZoomDownIn;animation-play-state:running}.rc-slider-tooltip-zoom-down-leave.rc-slider-tooltip-zoom-down-leave-active{animation-name:rcSliderTooltipZoomDownOut;animation-play-state:running}.rc-slider-tooltip-zoom-down-appear,.rc-slider-tooltip-zoom-down-enter{transform:scale(0);animation-timing-function:cubic-bezier(.23,1,.32,1)}.rc-slider-tooltip-zoom-down-leave{animation-timing-function:cubic-bezier(.755,.05,.855,.06)}@keyframes rcSliderTooltipZoomDownIn{0%{opacity:0;transform-origin:50% 100%;transform:scale(0)}to{transform-origin:50% 100%;transform:scale(1)}}@keyframes rcSliderTooltipZoomDownOut{0%{transform-origin:50% 100%;transform:scale(1)}to{opacity:0;transform-origin:50% 100%;transform:scale(0)}}.rc-slider-tooltip{position:absolute;left:-9999px;top:-9999px;visibility:visible}.rc-slider-tooltip,.rc-slider-tooltip *{box-sizing:border-box;-webkit-tap-highlight-color:transparent}.rc-slider-tooltip-hidden{display:none}.rc-slider-tooltip-placement-top{padding:4px 0 8px}.rc-slider-tooltip-inner{padding:6px 2px;min-width:24px;height:24px;font-size:12px;line-height:1;color:#fff;text-align:center;text-decoration:none;background-color:#6c6c6c;border-radius:6px;box-shadow:0 0 4px #d9d9d9}.rc-slider-tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.rc-slider-tooltip-placement-top .rc-slider-tooltip-arrow{bottom:4px;left:50%;margin-left:-4px;border-width:4px 4px 0;border-top-color:#6c6c6c}.layout-editor{background:#f9f9f9;-ms-flex:1;flex:1;border-bottom:1px solid #f0f0f0}.layout-editor__warning{padding:10px;margin-bottom:15px;background:#fee0a5;font-size:12px;color:#6d6d6d}.layout-editor__icon{color:#fd8167}.layout-editor__quality{text-align:left}.layout-editor__wrapper{box-sizing:border-box;padding:30px 50px;max-width:760px;margin:0 auto;text-align:center}@media only screen and (max-width:680px){.layout-editor__wrapper{padding:10px}}.layout{display:block;max-width:500px;margin:0 auto}.layout svg{background:#fff;border:1px solid #ccc;box-shadow:0 4px 12px 0 rgba(0,0,0,.3);cursor:move}.text-editor{display:none;top:0;position:fixed;bottom:0;left:0;right:0;z-index:80}.text-editor.open{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center}.text-editor__overlay{position:fixed;top:0;left:0;right:0;bottom:0;opacity:.4;background:silver;z-index:90}.text-editor__popup{box-sizing:border-box;max-width:50%;padding:50px;background:#fff;z-index:100;border:1px solid #ccc;box-shadow:0 4px 12px 0 rgba(0,0,0,.3)}@media only screen and (max-width:680px){.text-editor__popup{padding:15px;max-width:90%}}.text-editor__note{color:#ccc;font-size:12px;margin:10px 0}.text-editor__input{font-size:18px;padding:10px 20px;margin-bottom:20px;border:0 solid #ccc;border-bottom-width:1px;width:85%}@media only screen and (max-width:680px){.text-editor__input{padding:5px 10px;font-size:1em}}.text-editor__btn{display:block;padding:10px 20px;background:#ccc;border:1px solid #ccc;width:100%}.template{display:block;margin:30px 15px 0;padding:0;border:0 none;background:0 0;cursor:pointer;-ms-flex-item-align:start;align-self:flex-start;max-width:125px;width:20%}@media only screen and (max-width:680px){.template{margin:10px 10px 5px;width:22%}}.template.selected svg{border:2px solid #2747ae}.template svg{box-sizing:border-box;background:#fff;border:2px solid #9e9e9e}.templates-list{background:#f9f9f9;-ms-flex-wrap:wrap;flex-wrap:wrap;overflow:hidden}.templates-list,.templates-list__month{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-pack:center;justify-content:center}.templates-list__month{box-sizing:border-box;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-ms-flex-align:center;align-items:center;width:100%;max-width:400px;padding:20px 40px;margin:20px auto 0;border:1px solid #dfdfdf;box-shadow:0 2px 4px 0 #dfdfdf}.templates-list__note,.templates-list__select{-ms-flex-preferred-size:50%;flex-basis:50%}.templates-list__select{background:0 0;color:#464646;cursor:pointer;-webkit-appearance:none;-moz-appearance:none;appearance:none;border:1px solid #dfdfdf;border-radius:0;width:100%;height:42px;font-size:inherit;padding:0 45px 0 10px;display:block}.photo-actions{width:600px;margin:20px auto;background:0 0}@media only screen and (max-width:680px){.photo-actions{display:none}}.photo-actions__item{font-size:14px;color:#6d6d6d;margin:10px 0;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.photo-actions__item--warning{color:#fd8167}.photo-actions__icon{color:#2747ae;font-size:32px;margin-right:20px}.photo-actions__icon--warning{color:#fd8167}.photo-editor{min-height:100%;background:#f9f9f9}.photo-editor,.photo-editor__wrapper{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-wrap:nowrap;flex-wrap:nowrap}.photo-editor__wrapper{-ms-flex-positive:1;flex-grow:1}.photo-editor__layout{width:100%;margin:0 auto}.photo-editor__layout--card,.photo-editor__layout--print{max-width:400px}.photos-list{padding-bottom:40px;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;-ms-flex-align:start;align-items:flex-start}.photos-list,.photos-list__item{display:-ms-flexbox;display:flex}.photos-list__item{-ms-flex-direction:column;flex-direction:column;-ms-flex-align:center;align-items:center;width:100%;max-width:300px}@media only screen and (max-width:680px){.photos-list__item{-ms-flex-preferred-size:50%;flex-basis:50%}}.photos-list__image{height:auto;display:block}.photos-list__link{display:block}.photos-list__controls{padding:5px 10px;border:1px solid #c9c9c9;border-radius:13px;font-size:12px;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-ms-flex-align:center;align-items:center;margin:0 auto;width:60px}.photos-list__btn{border:none;background:0 0;outline:0;cursor:pointer}.photos-list__counter{-ms-flex-positive:1;flex-grow:1;text-align:center}.photos-list__description{font-size:10px;color:#9e9e9e;display:block;text-align:center}@font-face{font-family:periodica;src:url(twentytwelve_periodica.woff2) format("woff2"),url(twentytwelve_periodica.woff) format("woff");font-weight:400;font-style:normal}@font-face{font-family:icomoon;src:url(app-icons.woff) format("woff"),url(app-icons.svg) format("svg");font-weight:400;font-style:normal}[class*=" icon-"],[class^=icon-]{font-family:icomoon!important;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-check:before{content:"\E900"}.icon-copy:before{content:"\E901"}.icon-gift:before{content:"\E902"}.icon-photo:before{content:"\E010"}.icon-text:before{content:"\E034"}.icon-rotate:before{content:"\E058"}.icon-cart:before{content:"\E903"}.icon-move:before{content:"\E904"}.icon-drag:before{content:"\E905"}.icon-tap:before{content:"\E906"}.icon-layout:before{content:"\E907"}.icon-edit:before{content:"\E908"}.icon-remove:before{content:"\E9AC"}.icon-menu:before{content:"\E9BD"}.icon-warning:before{content:"\EA07"}.icon-close:before{content:"\EA0F"}.icon-circle-up:before{content:"\EA41"}
</style>


<form action="upload-build.php" class="dropzone" drop-zone="" id="file-dropzone"></form>
<hr>

<br>
<br>

<ul class="edit-toolbar__tools">
    <li class="edit-toolbar__tool"><a href="#" class="edit-toolbar__btn"><span class="icon icon-photo"></span> Заменить</a></li>
    <li class="edit-toolbar__tool"><a href="#" class="edit-toolbar__btn"><span class="icon icon-text"></span> Текст</a></li>
    <li class="edit-toolbar__tool last"><a href="#" class="edit-toolbar__btn"><span class="icon icon-rotate"></span> Повернуть</a></li>
</ul>

<br>
<ul class="photo-actions">
    <li class="photo-actions__item"><span class="photo-actions__icon icon icon-drag"></span> Нажмите на фотографию и перемещайте её в рамке</li>
    <li class="photo-actions__item"><span class="photo-actions__icon icon icon-layout"></span>Нажмите на понравившийся макет, чтобы применить его к фотографии</li>
</ul>

<div class="book-photos-list">
    <div class="book-photos-list__item book-photos-list__item--with-dummy" id="page-0d5cd398-6545-46b5-bc02-8ffa3dfac431">
        <div class="dummy-page" style="width: 300px;">
            <p class="dummy-page__text">Форзац книги</p><span class="product-item__page-num">&nbsp;</span></div>
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/0d5cd398-6545-46b5-bc02-8ffa3dfac431">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
                            <image id="image" x="-361" y="-127" width="1065.24" height="1065.24" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-38697">
                                    <rect x="23" y="23" width="538" height="538"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">1</span></div>
    </div>
    <div class="book-photos-list__item" id="page-9db6e04b-b759-447a-9be7-81ef185f1b66">
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/9db6e04b-b759-447a-9be7-81ef185f1b66">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-50213">
                            <image id="image" x="116" y="57.5" width="703.5" height="703.5" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2FwlEHF8OvSXR63pjQjGlA_2.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-50213')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-50213">
                                    <rect x="116" y="57.5" width="352" height="469"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">2</span></div>
    </div>
    <div class="book-photos-list__item" id="page-3e8e6ae5-b5fb-4f77-bc52-4e2df58fd00c">
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/3e8e6ae5-b5fb-4f77-bc52-4e2df58fd00c">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-29966">
                            <image id="image" x="23" y="23" width="538" height="538" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2FGFrad56Sk2psB6dQcbzw_1.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-29966')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-29966">
                                    <rect x="23" y="23" width="538" height="538"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">3</span></div>
    </div>
    <div class="book-photos-list__item" id="page-c3f2b17e-4cd9-43a7-9d68-b69ad966e370">
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/c3f2b17e-4cd9-43a7-9d68-b69ad966e370">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-53404">
                            <image id="image" x="23" y="23" width="538" height="538" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Fi2WyZQwoTqShG0BJT3uo_1-1.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-53404')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-53404">
                                    <rect x="23" y="23" width="538" height="538"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">4</span></div>
    </div>
    <div class="book-photos-list__item" id="page-be05b512-7f00-4d11-97fc-d35b6c19e4e3">
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/be05b512-7f00-4d11-97fc-d35b6c19e4e3">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-2948">
                            <image id="image" x="23" y="23" width="538" height="538" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2F51hokOqIS8ypBmKAQJOX_1-2.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-2948')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-2948">
                                    <rect x="23" y="23" width="538" height="538"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">5</span></div>
    </div>
    <div class="book-photos-list__item book-photos-list__item--center" id="page-217dcb61-a606-42b2-b899-b05ab05df5c9">
        <div class="book-photos-list__wrapper">
            <div class="draggable-photo" draggable="true">
                <a class="product-item" href="/big-book/edit/217dcb61-a606-42b2-b899-b05ab05df5c9">
                    <button type="button" title="удалить" class="product-item__remove icon icon-close"></button><span title="Редактировать" class="product-item__edit icon icon-edit"></span><span title="Качество печати может быть сниженным" class="product-item__quality icon icon-warning"></span>
                    <svg class="product-item__svg" viewBox="0 0 584 584">
                        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-99114">
                            <image id="image" x="23" y="23" width="538" height="538" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2FX81WLkbISyOW2v5CwbEP_1-3.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-99114')"></image>
                            <desc>Created with Snap</desc>
                            <defs>
                                <clipPath id="image-cp-photo-99114">
                                    <rect x="23" y="23" width="538" height="538"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </svg>
                </a>
            </div><span class="product-item__page-num">6</span></div>
    </div>
</div>

<div class="layout-editor__wrapper">
    <div class="photo-warning">
        <div class="photo-warning__quality"><span class="icon icon-warning photo-warning__icon"></span>&nbsp;Исходный размер вашего фото 600х600px, мы советуем выбирать фотографии размером не менее 1871x1871px или исходя из рассчета 100px на 1см области печати.</div>
    </div>
    <div class="layout" id="layout">
        <svg width="100%" height="100%" viewBox="0 0 584 584">
            <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
                <image id="image" x="23" y="23" width="538" height="538" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
                <desc>Created with Snap</desc>
                <defs>
                    <clipPath id="image-cp-photo-38697">
                        <rect x="23" y="23" width="538" height="538"></rect>
                    </clipPath>
                </defs>
            </svg>
        </svg>
    </div>
    <div class="slider">
        <div class="rc-slider rc-slider-with-marks">
            <div class="rc-slider-rail"></div>
            <div class="rc-slider-track" style="left: 0%; width: 0%;"></div>
            <div class="rc-slider-step"><span class="rc-slider-dot rc-slider-dot-active" style="left: 0%;"></span><span class="rc-slider-dot" style="left: 25%;"></span><span class="rc-slider-dot" style="left: 50%;"></span><span class="rc-slider-dot" style="left: 100%;"></span></div>
            <div tabindex="0" class="rc-slider-handle" role="slider" aria-valuemin="100" aria-valuemax="300" aria-valuenow="100" aria-disabled="false" style="left: 0%;"></div>
            <div class="rc-slider-mark"><span class="rc-slider-mark-text rc-slider-mark-text-active" style="width: 30%; margin-left: -15%; left: 0%;">1x</span><span class="rc-slider-mark-text" style="width: 30%; margin-left: -15%; left: 25%;">1.5x</span><span class="rc-slider-mark-text" style="width: 30%; margin-left: -15%; left: 50%;">2x</span><span class="rc-slider-mark-text" style="width: 30%; margin-left: -15%; left: 100%;">3x</span></div>
        </div>
    </div>
</div>

<div class="templates-list">
    <button type="button" class="template selected">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="23" y="23" width="538" height="538" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="98" y="98" width="388" height="388" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="178" y="178" width="228" height="228" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="77" y="130.75" width="430" height="322.5" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="116" y="57.5" width="352" height="469" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="23" y="57.5" width="352" height="469" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="209" y="57.5" width="352" height="469" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="23" y="130.75" width="430" height="322.5" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="131" y="130.75" width="430" height="322.5" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">
            <defs>
                <style type="text/css">
                    @font-face {
                        font-family: 'Twentytwelve';
                        src: url('https://static.periodica.press/public/twentytwelveperiodica.otf');
                    }
                </style>

            </defs>

            <text clip-path="url(#textClipPath)" font-family="Twentytwelve" id="text" text-anchor="middle" x="292" y="463" font-size="12">Ваш текст здесь</text>
            <desc>Created with Snap</desc>
            <rect x="88" y="88" width="408" height="272" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="77" y="149" width="430" height="286" fill="#cccccc" style=""></rect>
        </svg>
    </button>
    <button type="button" class="template">
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" viewBox="0 0 584 584">

            <desc>Created with Snap</desc>
            <defs></defs>
            <rect x="136" y="57.5" width="312" height="469" fill="#cccccc" style=""></rect>
        </svg>
    </button>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="98" y="98" width="387.99999999999994" height="387.99999999999994" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="98" y="98" width="388" height="388"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="178" y="178" width="228" height="228" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="178" y="178" width="228" height="228"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="77" y="130.75" width="430" height="430" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="77" y="130.75" width="430" height="322.5"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="116" y="57.5" width="469" height="469" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="116" y="57.5" width="352" height="469"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="23" y="57.5" width="469" height="469" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="23" y="57.5" width="352" height="469"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="209" y="57.5" width="469" height="469" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="209" y="57.5" width="352" height="469"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="23" y="130.75" width="430" height="430" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="23" y="130.75" width="430" height="322.5"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="131" y="130.75" width="430" height="430" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="131" y="130.75" width="430" height="322.5"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <defs>
                <style type="text/css">
                    @font-face {
                        font-family: 'Twentytwelve';
                        src: url('https://static.periodica.press/public/twentytwelveperiodica.otf');
                    }
                </style>
                <clipPath id="textClipPath-photo-38697">
                    <rect y="449" x="88" width="408" height="20"></rect>
                </clipPath>
                <clipPath id="image-cp-photo-38697">
                    <rect x="88" y="88" width="408" height="272"></rect>
                </clipPath>
            </defs>
            <image id="image" x="88" y="88" width="408.00000000000006" height="408.00000000000006" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <text clip-path="url('#textClipPath-photo-38697')" font-family="Twentytwelve" id="photo-38697-text" text-anchor="middle" x="292" y="463" font-size="12">Ваш текст здесь</text>
            <desc>Created with Snap</desc>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="77" y="149" width="430" height="430" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="77" y="149" width="430" height="286"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>

<div class="layout" id="layout">
    <svg width="100%" height="100%" viewBox="0 0 584 584">
        <svg width="584" height="584" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewport-fill="white" id="photo-38697">
            <image id="image" x="136" y="57.5" width="469" height="469" xlink:href="https://s3.amazonaws.com/periodica-web/uploads%2Ffua9yGQeQ92qeBuDmEWN_1-4.jpg" preserveAspectRatio="xMidYMid slice" clip-path="url('#image-cp-photo-38697')"></image>
            <desc>Created with Snap</desc>
            <defs>
                <clipPath id="image-cp-photo-38697">
                    <rect x="136" y="57.5" width="312" height="469"></rect>
                </clipPath>
            </defs>
        </svg>
    </svg>
</div>


<script type="text/javascript">
// Dropzone
(function(){var a,b,c,d,e,f,g,h,i=[].slice,j={}.hasOwnProperty,k=function(a,b){function c(){this.constructor=a}for(var d in b)j.call(b,d)&&(a[d]=b[d]);return c.prototype=b.prototype,a.prototype=new c,a.__super__=b.prototype,a};g=function(){},b=function(){function a(){}return a.prototype.addEventListener=a.prototype.on,a.prototype.on=function(a,b){return this._callbacks=this._callbacks||{},this._callbacks[a]||(this._callbacks[a]=[]),this._callbacks[a].push(b),this},a.prototype.emit=function(){var a,b,c,d,e,f;if(d=arguments[0],a=2<=arguments.length?i.call(arguments,1):[],this._callbacks=this._callbacks||{},c=this._callbacks[d])for(e=0,f=c.length;f>e;e++)b=c[e],b.apply(this,a);return this},a.prototype.removeListener=a.prototype.off,a.prototype.removeAllListeners=a.prototype.off,a.prototype.removeEventListener=a.prototype.off,a.prototype.off=function(a,b){var c,d,e,f,g;if(!this._callbacks||0===arguments.length)return this._callbacks={},this;if(d=this._callbacks[a],!d)return this;if(1===arguments.length)return delete this._callbacks[a],this;for(e=f=0,g=d.length;g>f;e=++f)if(c=d[e],c===b){d.splice(e,1);break}return this},a}(),a=function(a){function c(a,b){var e,f,g;if(this.element=a,this.version=c.version,this.defaultOptions.previewTemplate=this.defaultOptions.previewTemplate.replace(/\n*/g,""),this.clickableElements=[],this.listeners=[],this.files=[],"string"==typeof this.element&&(this.element=document.querySelector(this.element)),!this.element||null==this.element.nodeType)throw new Error("Invalid dropzone element.");if(this.element.dropzone)throw new Error("Dropzone already attached.");if(c.instances.push(this),this.element.dropzone=this,e=null!=(g=c.optionsForElement(this.element))?g:{},this.options=d({},this.defaultOptions,e,null!=b?b:{}),this.options.forceFallback||!c.isBrowserSupported())return this.options.fallback.call(this);if(null==this.options.url&&(this.options.url=this.element.getAttribute("action")),!this.options.url)throw new Error("No URL provided.");if(this.options.acceptedFiles&&this.options.acceptedMimeTypes)throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");this.options.acceptedMimeTypes&&(this.options.acceptedFiles=this.options.acceptedMimeTypes,delete this.options.acceptedMimeTypes),this.options.method=this.options.method.toUpperCase(),(f=this.getExistingFallback())&&f.parentNode&&f.parentNode.removeChild(f),this.options.previewsContainer!==!1&&(this.previewsContainer=this.options.previewsContainer?c.getElement(this.options.previewsContainer,"previewsContainer"):this.element),this.options.clickable&&(this.clickableElements=this.options.clickable===!0?[this.element]:c.getElements(this.options.clickable,"clickable")),this.init()}var d,e;return k(c,a),c.prototype.Emitter=b,c.prototype.events=["drop","dragstart","dragend","dragenter","dragover","dragleave","addedfile","addedfiles","removedfile","thumbnail","error","errormultiple","processing","processingmultiple","uploadprogress","totaluploadprogress","sending","sendingmultiple","success","successmultiple","canceled","canceledmultiple","complete","completemultiple","reset","maxfilesexceeded","maxfilesreached","queuecomplete"],c.prototype.defaultOptions={url:null,method:"post",withCredentials:!1,parallelUploads:2,uploadMultiple:!1,maxFilesize:256,paramName:"file",createImageThumbnails:!0,maxThumbnailFilesize:10,thumbnailWidth:120,thumbnailHeight:120,filesizeBase:1e3,maxFiles:null,params:{},clickable:!0,ignoreHiddenFiles:!0,acceptedFiles:null,acceptedMimeTypes:null,autoProcessQueue:!0,autoQueue:!0,addRemoveLinks:!1,previewsContainer:null,hiddenInputContainer:"body",capture:null,renameFilename:null,dictDefaultMessage:"Drop files here to upload",dictFallbackMessage:"Your browser does not support drag'n'drop file uploads.",dictFallbackText:"Please use the fallback form below to upload your files like in the olden days.",dictFileTooBig:"File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.",dictInvalidFileType:"You can't upload files of this type.",dictResponseError:"Server responded with {{statusCode}} code.",dictCancelUpload:"Cancel upload",dictCancelUploadConfirmation:"Are you sure you want to cancel this upload?",dictRemoveFile:"Remove file",dictRemoveFileConfirmation:null,dictMaxFilesExceeded:"You can not upload any more files.",accept:function(a,b){return b()},init:function(){return g},forceFallback:!1,fallback:function(){var a,b,d,e,f,g;for(this.element.className=""+this.element.className+" dz-browser-not-supported",g=this.element.getElementsByTagName("div"),e=0,f=g.length;f>e;e++)a=g[e],/(^| )dz-message($| )/.test(a.className)&&(b=a,a.className="dz-message");return b||(b=c.createElement('<div class="dz-message"><span></span></div>'),this.element.appendChild(b)),d=b.getElementsByTagName("span")[0],d&&(null!=d.textContent?d.textContent=this.options.dictFallbackMessage:null!=d.innerText&&(d.innerText=this.options.dictFallbackMessage)),this.element.appendChild(this.getFallbackForm())},resize:function(a){var b,c,d;return b={srcX:0,srcY:0,srcWidth:a.width,srcHeight:a.height},c=a.width/a.height,b.optWidth=this.options.thumbnailWidth,b.optHeight=this.options.thumbnailHeight,null==b.optWidth&&null==b.optHeight?(b.optWidth=b.srcWidth,b.optHeight=b.srcHeight):null==b.optWidth?b.optWidth=c*b.optHeight:null==b.optHeight&&(b.optHeight=1/c*b.optWidth),d=b.optWidth/b.optHeight,a.height<b.optHeight||a.width<b.optWidth?(b.trgHeight=b.srcHeight,b.trgWidth=b.srcWidth):c>d?(b.srcHeight=a.height,b.srcWidth=b.srcHeight*d):(b.srcWidth=a.width,b.srcHeight=b.srcWidth/d),b.srcX=(a.width-b.srcWidth)/2,b.srcY=(a.height-b.srcHeight)/2,b},drop:function(){return this.element.classList.remove("dz-drag-hover")},dragstart:g,dragend:function(){return this.element.classList.remove("dz-drag-hover")},dragenter:function(){return this.element.classList.add("dz-drag-hover")},dragover:function(){return this.element.classList.add("dz-drag-hover")},dragleave:function(){return this.element.classList.remove("dz-drag-hover")},paste:g,reset:function(){return this.element.classList.remove("dz-started")},addedfile:function(a){var b,d,e,f,g,h,i,j,k,l,m,n,o;if(this.element===this.previewsContainer&&this.element.classList.add("dz-started"),this.previewsContainer){for(a.previewElement=c.createElement(this.options.previewTemplate.trim()),a.previewTemplate=a.previewElement,this.previewsContainer.appendChild(a.previewElement),l=a.previewElement.querySelectorAll("[data-dz-name]"),f=0,i=l.length;i>f;f++)b=l[f],b.textContent=this._renameFilename(a.name);for(m=a.previewElement.querySelectorAll("[data-dz-size]"),g=0,j=m.length;j>g;g++)b=m[g],b.innerHTML=this.filesize(a.size);for(this.options.addRemoveLinks&&(a._removeLink=c.createElement('<a class="dz-remove" href="javascript:undefined;" data-dz-remove>'+this.options.dictRemoveFile+"</a>"),a.previewElement.appendChild(a._removeLink)),d=function(b){return function(d){return d.preventDefault(),d.stopPropagation(),a.status===c.UPLOADING?c.confirm(b.options.dictCancelUploadConfirmation,function(){return b.removeFile(a)}):b.options.dictRemoveFileConfirmation?c.confirm(b.options.dictRemoveFileConfirmation,function(){return b.removeFile(a)}):b.removeFile(a)}}(this),n=a.previewElement.querySelectorAll("[data-dz-remove]"),o=[],h=0,k=n.length;k>h;h++)e=n[h],o.push(e.addEventListener("click",d));return o}},removedfile:function(a){var b;return a.previewElement&&null!=(b=a.previewElement)&&b.parentNode.removeChild(a.previewElement),this._updateMaxFilesReachedClass()},thumbnail:function(a,b){var c,d,e,f;if(a.previewElement){for(a.previewElement.classList.remove("dz-file-preview"),f=a.previewElement.querySelectorAll("[data-dz-thumbnail]"),d=0,e=f.length;e>d;d++)c=f[d],c.alt=a.name,c.src=b;return setTimeout(function(){return function(){return a.previewElement.classList.add("dz-image-preview")}}(this),1)}},error:function(a,b){var c,d,e,f,g;if(a.previewElement){for(a.previewElement.classList.add("dz-error"),"String"!=typeof b&&b.error&&(b=b.error),f=a.previewElement.querySelectorAll("[data-dz-errormessage]"),g=[],d=0,e=f.length;e>d;d++)c=f[d],g.push(c.textContent=b);return g}},errormultiple:g,processing:function(a){return a.previewElement&&(a.previewElement.classList.add("dz-processing"),a._removeLink)?a._removeLink.textContent=this.options.dictCancelUpload:void 0},processingmultiple:g,uploadprogress:function(a,b){var c,d,e,f,g;if(a.previewElement){for(f=a.previewElement.querySelectorAll("[data-dz-uploadprogress]"),g=[],d=0,e=f.length;e>d;d++)c=f[d],g.push("PROGRESS"===c.nodeName?c.value=b:c.style.width=""+b+"%");return g}},totaluploadprogress:g,sending:g,sendingmultiple:g,success:function(a){return a.previewElement?a.previewElement.classList.add("dz-success"):void 0},successmultiple:g,canceled:function(a){return this.emit("error",a,"Upload canceled.")},canceledmultiple:g,complete:function(a){return a._removeLink&&(a._removeLink.textContent=this.options.dictRemoveFile),a.previewElement?a.previewElement.classList.add("dz-complete"):void 0},completemultiple:g,maxfilesexceeded:g,maxfilesreached:g,queuecomplete:g,addedfiles:g,previewTemplate:'<div class="dz-preview dz-file-preview">\n  <div class="dz-image"><img data-dz-thumbnail /></div>\n  <div class="dz-details">\n    <div class="dz-size"><span data-dz-size></span></div>\n    <div class="dz-filename"><span data-dz-name></span></div>\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n  <div class="dz-success-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Check</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>\n      </g>\n    </svg>\n  </div>\n  <div class="dz-error-mark">\n    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">\n      <title>Error</title>\n      <defs></defs>\n      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">\n        <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">\n          <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>\n        </g>\n      </g>\n    </svg>\n  </div>\n</div>'},d=function(){var a,b,c,d,e,f,g;for(d=arguments[0],c=2<=arguments.length?i.call(arguments,1):[],f=0,g=c.length;g>f;f++){b=c[f];for(a in b)e=b[a],d[a]=e}return d},c.prototype.getAcceptedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted&&e.push(a);return e},c.prototype.getRejectedFiles=function(){var a,b,c,d,e;for(d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],a.accepted||e.push(a);return e},c.prototype.getFilesWithStatus=function(a){var b,c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)b=e[c],b.status===a&&f.push(b);return f},c.prototype.getQueuedFiles=function(){return this.getFilesWithStatus(c.QUEUED)},c.prototype.getUploadingFiles=function(){return this.getFilesWithStatus(c.UPLOADING)},c.prototype.getAddedFiles=function(){return this.getFilesWithStatus(c.ADDED)},c.prototype.getActiveFiles=function(){var a,b,d,e,f;for(e=this.files,f=[],b=0,d=e.length;d>b;b++)a=e[b],(a.status===c.UPLOADING||a.status===c.QUEUED)&&f.push(a);return f},c.prototype.init=function(){var a,b,d,e,f,g,h;for("form"===this.element.tagName&&this.element.setAttribute("enctype","multipart/form-data"),this.element.classList.contains("dropzone")&&!this.element.querySelector(".dz-message")&&this.element.appendChild(c.createElement('<div class="dz-default dz-message"><span>'+this.options.dictDefaultMessage+"</span></div>")),this.clickableElements.length&&(d=function(a){return function(){return a.hiddenFileInput&&a.hiddenFileInput.parentNode.removeChild(a.hiddenFileInput),a.hiddenFileInput=document.createElement("input"),a.hiddenFileInput.setAttribute("type","file"),(null==a.options.maxFiles||a.options.maxFiles>1)&&a.hiddenFileInput.setAttribute("multiple","multiple"),a.hiddenFileInput.className="dz-hidden-input",null!=a.options.acceptedFiles&&a.hiddenFileInput.setAttribute("accept",a.options.acceptedFiles),null!=a.options.capture&&a.hiddenFileInput.setAttribute("capture",a.options.capture),a.hiddenFileInput.style.visibility="hidden",a.hiddenFileInput.style.position="absolute",a.hiddenFileInput.style.top="0",a.hiddenFileInput.style.left="0",a.hiddenFileInput.style.height="0",a.hiddenFileInput.style.width="0",document.querySelector(a.options.hiddenInputContainer).appendChild(a.hiddenFileInput),a.hiddenFileInput.addEventListener("change",function(){var b,c,e,f;if(c=a.hiddenFileInput.files,c.length)for(e=0,f=c.length;f>e;e++)b=c[e],a.addFile(b);return a.emit("addedfiles",c),d()})}}(this))(),this.URL=null!=(g=window.URL)?g:window.webkitURL,h=this.events,e=0,f=h.length;f>e;e++)a=h[e],this.on(a,this.options[a]);return this.on("uploadprogress",function(a){return function(){return a.updateTotalUploadProgress()}}(this)),this.on("removedfile",function(a){return function(){return a.updateTotalUploadProgress()}}(this)),this.on("canceled",function(a){return function(b){return a.emit("complete",b)}}(this)),this.on("complete",function(a){return function(){return 0===a.getAddedFiles().length&&0===a.getUploadingFiles().length&&0===a.getQueuedFiles().length?setTimeout(function(){return a.emit("queuecomplete")},0):void 0}}(this)),b=function(a){return a.stopPropagation(),a.preventDefault?a.preventDefault():a.returnValue=!1},this.listeners=[{element:this.element,events:{dragstart:function(a){return function(b){return a.emit("dragstart",b)}}(this),dragenter:function(a){return function(c){return b(c),a.emit("dragenter",c)}}(this),dragover:function(a){return function(c){var d;try{d=c.dataTransfer.effectAllowed}catch(e){}return c.dataTransfer.dropEffect="move"===d||"linkMove"===d?"move":"copy",b(c),a.emit("dragover",c)}}(this),dragleave:function(a){return function(b){return a.emit("dragleave",b)}}(this),drop:function(a){return function(c){return b(c),a.drop(c)}}(this),dragend:function(a){return function(b){return a.emit("dragend",b)}}(this)}}],this.clickableElements.forEach(function(a){return function(b){return a.listeners.push({element:b,events:{click:function(d){return(b!==a.element||d.target===a.element||c.elementInside(d.target,a.element.querySelector(".dz-message")))&&a.hiddenFileInput.click(),!0}}})}}(this)),this.enable(),this.options.init.call(this)},c.prototype.destroy=function(){var a;return this.disable(),this.removeAllFiles(!0),(null!=(a=this.hiddenFileInput)?a.parentNode:void 0)&&(this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),this.hiddenFileInput=null),delete this.element.dropzone,c.instances.splice(c.instances.indexOf(this),1)},c.prototype.updateTotalUploadProgress=function(){var a,b,c,d,e,f,g,h;if(d=0,c=0,a=this.getActiveFiles(),a.length){for(h=this.getActiveFiles(),f=0,g=h.length;g>f;f++)b=h[f],d+=b.upload.bytesSent,c+=b.upload.total;e=100*d/c}else e=100;return this.emit("totaluploadprogress",e,c,d)},c.prototype._getParamName=function(a){return"function"==typeof this.options.paramName?this.options.paramName(a):""+this.options.paramName+(this.options.uploadMultiple?"["+a+"]":"")},c.prototype._renameFilename=function(a){return"function"!=typeof this.options.renameFilename?a:this.options.renameFilename(a)},c.prototype.getFallbackForm=function(){var a,b,d,e;return(a=this.getExistingFallback())?a:(d='<div class="dz-fallback">',this.options.dictFallbackText&&(d+="<p>"+this.options.dictFallbackText+"</p>"),d+='<input type="file" name="'+this._getParamName(0)+'" '+(this.options.uploadMultiple?'multiple="multiple"':void 0)+' /><input type="submit" value="Upload!"></div>',b=c.createElement(d),"FORM"!==this.element.tagName?(e=c.createElement('<form action="'+this.options.url+'" enctype="multipart/form-data" method="'+this.options.method+'"></form>'),e.appendChild(b)):(this.element.setAttribute("enctype","multipart/form-data"),this.element.setAttribute("method",this.options.method)),null!=e?e:b)},c.prototype.getExistingFallback=function(){var a,b,c,d,e,f;for(b=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)if(b=a[c],/(^| )fallback($| )/.test(b.className))return b},f=["div","form"],d=0,e=f.length;e>d;d++)if(c=f[d],a=b(this.element.getElementsByTagName(c)))return a},c.prototype.setupEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.addEventListener(b,c,!1));return e}());return g},c.prototype.removeEventListeners=function(){var a,b,c,d,e,f,g;for(f=this.listeners,g=[],d=0,e=f.length;e>d;d++)a=f[d],g.push(function(){var d,e;d=a.events,e=[];for(b in d)c=d[b],e.push(a.element.removeEventListener(b,c,!1));return e}());return g},c.prototype.disable=function(){var a,b,c,d,e;for(this.clickableElements.forEach(function(a){return a.classList.remove("dz-clickable")}),this.removeEventListeners(),d=this.files,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(this.cancelUpload(a));return e},c.prototype.enable=function(){return this.clickableElements.forEach(function(a){return a.classList.add("dz-clickable")}),this.setupEventListeners()},c.prototype.filesize=function(a){var b,c,d,e,f,g,h,i;if(d=0,e="b",a>0){for(g=["TB","GB","MB","KB","b"],c=h=0,i=g.length;i>h;c=++h)if(f=g[c],b=Math.pow(this.options.filesizeBase,4-c)/10,a>=b){d=a/Math.pow(this.options.filesizeBase,4-c),e=f;break}d=Math.round(10*d)/10}return"<strong>"+d+"</strong> "+e},c.prototype._updateMaxFilesReachedClass=function(){return null!=this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(this.getAcceptedFiles().length===this.options.maxFiles&&this.emit("maxfilesreached",this.files),this.element.classList.add("dz-max-files-reached")):this.element.classList.remove("dz-max-files-reached")},c.prototype.drop=function(a){var b,c;a.dataTransfer&&(this.emit("drop",a),b=a.dataTransfer.files,this.emit("addedfiles",b),b.length&&(c=a.dataTransfer.items,c&&c.length&&null!=c[0].webkitGetAsEntry?this._addFilesFromItems(c):this.handleFiles(b)))},c.prototype.paste=function(a){var b,c;if(null!=(null!=a&&null!=(c=a.clipboardData)?c.items:void 0))return this.emit("paste",a),b=a.clipboardData.items,b.length?this._addFilesFromItems(b):void 0},c.prototype.handleFiles=function(a){var b,c,d,e;for(e=[],c=0,d=a.length;d>c;c++)b=a[c],e.push(this.addFile(b));return e},c.prototype._addFilesFromItems=function(a){var b,c,d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],f.push(null!=c.webkitGetAsEntry&&(b=c.webkitGetAsEntry())?b.isFile?this.addFile(c.getAsFile()):b.isDirectory?this._addFilesFromDirectory(b,b.name):void 0:null!=c.getAsFile?null==c.kind||"file"===c.kind?this.addFile(c.getAsFile()):void 0:void 0);return f},c.prototype._addFilesFromDirectory=function(a,b){var c,d,e;return c=a.createReader(),d=function(a){return"undefined"!=typeof console&&null!==console&&"function"==typeof console.log?console.log(a):void 0},(e=function(a){return function(){return c.readEntries(function(c){var d,f,g;if(c.length>0){for(f=0,g=c.length;g>f;f++)d=c[f],d.isFile?d.file(function(c){return a.options.ignoreHiddenFiles&&"."===c.name.substring(0,1)?void 0:(c.fullPath=""+b+"/"+c.name,a.addFile(c))}):d.isDirectory&&a._addFilesFromDirectory(d,""+b+"/"+d.name);e()}return null},d)}}(this))()},c.prototype.accept=function(a,b){return a.size>1024*this.options.maxFilesize*1024?b(this.options.dictFileTooBig.replace("{{filesize}}",Math.round(a.size/1024/10.24)/100).replace("{{maxFilesize}}",this.options.maxFilesize)):c.isValidFile(a,this.options.acceptedFiles)?null!=this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(b(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}",this.options.maxFiles)),this.emit("maxfilesexceeded",a)):this.options.accept.call(this,a,b):b(this.options.dictInvalidFileType)},c.prototype.addFile=function(a){return a.upload={progress:0,total:a.size,bytesSent:0},this.files.push(a),a.status=c.ADDED,this.emit("addedfile",a),this._enqueueThumbnail(a),this.accept(a,function(b){return function(c){return c?(a.accepted=!1,b._errorProcessing([a],c)):(a.accepted=!0,b.options.autoQueue&&b.enqueueFile(a)),b._updateMaxFilesReachedClass()}}(this))},c.prototype.enqueueFiles=function(a){var b,c,d;for(c=0,d=a.length;d>c;c++)b=a[c],this.enqueueFile(b);return null},c.prototype.enqueueFile=function(a){if(a.status!==c.ADDED||a.accepted!==!0)throw new Error("This file can't be queued because it has already been processed or was rejected.");return a.status=c.QUEUED,this.options.autoProcessQueue?setTimeout(function(a){return function(){return a.processQueue()}}(this),0):void 0},c.prototype._thumbnailQueue=[],c.prototype._processingThumbnail=!1,c.prototype._enqueueThumbnail=function(a){return this.options.createImageThumbnails&&a.type.match(/image.*/)&&a.size<=1024*this.options.maxThumbnailFilesize*1024?(this._thumbnailQueue.push(a),setTimeout(function(a){return function(){return a._processThumbnailQueue()}}(this),0)):void 0},c.prototype._processThumbnailQueue=function(){return this._processingThumbnail||0===this._thumbnailQueue.length?void 0:(this._processingThumbnail=!0,this.createThumbnail(this._thumbnailQueue.shift(),function(a){return function(){return a._processingThumbnail=!1,a._processThumbnailQueue()}}(this)))},c.prototype.removeFile=function(a){return a.status===c.UPLOADING&&this.cancelUpload(a),this.files=h(this.files,a),this.emit("removedfile",a),0===this.files.length?this.emit("reset"):void 0},c.prototype.removeAllFiles=function(a){var b,d,e,f;for(null==a&&(a=!1),f=this.files.slice(),d=0,e=f.length;e>d;d++)b=f[d],(b.status!==c.UPLOADING||a)&&this.removeFile(b);return null},c.prototype.createThumbnail=function(a,b){var c;return c=new FileReader,c.onload=function(d){return function(){return"image/svg+xml"===a.type?(d.emit("thumbnail",a,c.result),void(null!=b&&b())):d.createThumbnailFromUrl(a,c.result,b)}}(this),c.readAsDataURL(a)},c.prototype.createThumbnailFromUrl=function(a,b,c,d){var e;return e=document.createElement("img"),d&&(e.crossOrigin=d),e.onload=function(b){return function(){var d,g,h,i,j,k,l,m;return a.width=e.width,a.height=e.height,h=b.options.resize.call(b,a),null==h.trgWidth&&(h.trgWidth=h.optWidth),null==h.trgHeight&&(h.trgHeight=h.optHeight),d=document.createElement("canvas"),g=d.getContext("2d"),d.width=h.trgWidth,d.height=h.trgHeight,f(g,e,null!=(j=h.srcX)?j:0,null!=(k=h.srcY)?k:0,h.srcWidth,h.srcHeight,null!=(l=h.trgX)?l:0,null!=(m=h.trgY)?m:0,h.trgWidth,h.trgHeight),i=d.toDataURL("image/png"),b.emit("thumbnail",a,i),null!=c?c():void 0}}(this),null!=c&&(e.onerror=c),e.src=b},c.prototype.processQueue=function(){var a,b,c,d;if(b=this.options.parallelUploads,c=this.getUploadingFiles().length,a=c,!(c>=b)&&(d=this.getQueuedFiles(),d.length>0)){if(this.options.uploadMultiple)return this.processFiles(d.slice(0,b-c));for(;b>a;){if(!d.length)return;this.processFile(d.shift()),a++}}},c.prototype.processFile=function(a){return this.processFiles([a])},c.prototype.processFiles=function(a){var b,d,e;for(d=0,e=a.length;e>d;d++)b=a[d],b.processing=!0,b.status=c.UPLOADING,this.emit("processing",b);return this.options.uploadMultiple&&this.emit("processingmultiple",a),this.uploadFiles(a)},c.prototype._getFilesWithXhr=function(a){var b,c;return c=function(){var c,d,e,f;for(e=this.files,f=[],c=0,d=e.length;d>c;c++)b=e[c],b.xhr===a&&f.push(b);return f}.call(this)},c.prototype.cancelUpload=function(a){var b,d,e,f,g,h,i;if(a.status===c.UPLOADING){for(d=this._getFilesWithXhr(a.xhr),e=0,g=d.length;g>e;e++)b=d[e],b.status=c.CANCELED;for(a.xhr.abort(),f=0,h=d.length;h>f;f++)b=d[f],this.emit("canceled",b);this.options.uploadMultiple&&this.emit("canceledmultiple",d)}else((i=a.status)===c.ADDED||i===c.QUEUED)&&(a.status=c.CANCELED,this.emit("canceled",a),this.options.uploadMultiple&&this.emit("canceledmultiple",[a]));return this.options.autoProcessQueue?this.processQueue():void 0},e=function(){var a,b;return b=arguments[0],a=2<=arguments.length?i.call(arguments,1):[],"function"==typeof b?b.apply(this,a):b},c.prototype.uploadFile=function(a){return this.uploadFiles([a])},c.prototype.uploadFiles=function(a){var b,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L;for(w=new XMLHttpRequest,x=0,B=a.length;B>x;x++)b=a[x],b.xhr=w;p=e(this.options.method,a),u=e(this.options.url,a),w.open(p,u,!0),w.withCredentials=!!this.options.withCredentials,s=null,g=function(c){return function(){var d,e,f;for(f=[],d=0,e=a.length;e>d;d++)b=a[d],f.push(c._errorProcessing(a,s||c.options.dictResponseError.replace("{{statusCode}}",w.status),w));return f}}(this),t=function(c){return function(d){var e,f,g,h,i,j,k,l,m;if(null!=d)for(f=100*d.loaded/d.total,g=0,j=a.length;j>g;g++)b=a[g],b.upload={progress:f,total:d.total,bytesSent:d.loaded};else{for(e=!0,f=100,h=0,k=a.length;k>h;h++)b=a[h],(100!==b.upload.progress||b.upload.bytesSent!==b.upload.total)&&(e=!1),b.upload.progress=f,b.upload.bytesSent=b.upload.total;if(e)return}for(m=[],i=0,l=a.length;l>i;i++)b=a[i],m.push(c.emit("uploadprogress",b,f,b.upload.bytesSent));return m}}(this),w.onload=function(b){return function(d){var e;if(a[0].status!==c.CANCELED&&4===w.readyState){if(s=w.responseText,w.getResponseHeader("content-type")&&~w.getResponseHeader("content-type").indexOf("application/json"))try{s=JSON.parse(s)}catch(f){d=f,s="Invalid JSON response from server."}return t(),200<=(e=w.status)&&300>e?b._finished(a,s,d):g()}}}(this),w.onerror=function(){return function(){return a[0].status!==c.CANCELED?g():void 0}}(this),r=null!=(G=w.upload)?G:w,r.onprogress=t,j={Accept:"application/json","Cache-Control":"no-cache","X-Requested-With":"XMLHttpRequest"},this.options.headers&&d(j,this.options.headers);for(h in j)i=j[h],i&&w.setRequestHeader(h,i);if(f=new FormData,this.options.params){H=this.options.params;for(o in H)v=H[o],f.append(o,v)}for(y=0,C=a.length;C>y;y++)b=a[y],this.emit("sending",b,w,f);if(this.options.uploadMultiple&&this.emit("sendingmultiple",a,w,f),"FORM"===this.element.tagName)for(I=this.element.querySelectorAll("input, textarea, select, button"),z=0,D=I.length;D>z;z++)if(l=I[z],m=l.getAttribute("name"),n=l.getAttribute("type"),"SELECT"===l.tagName&&l.hasAttribute("multiple"))for(J=l.options,A=0,E=J.length;E>A;A++)q=J[A],q.selected&&f.append(m,q.value);else(!n||"checkbox"!==(K=n.toLowerCase())&&"radio"!==K||l.checked)&&f.append(m,l.value);for(k=F=0,L=a.length-1;L>=0?L>=F:F>=L;k=L>=0?++F:--F)f.append(this._getParamName(k),a[k],this._renameFilename(a[k].name));return this.submitRequest(w,f,a)},c.prototype.submitRequest=function(a,b){return a.send(b)},c.prototype._finished=function(a,b,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=c.SUCCESS,this.emit("success",e,b,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("successmultiple",a,b,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},c.prototype._errorProcessing=function(a,b,d){var e,f,g;for(f=0,g=a.length;g>f;f++)e=a[f],e.status=c.ERROR,this.emit("error",e,b,d),this.emit("complete",e);return this.options.uploadMultiple&&(this.emit("errormultiple",a,b,d),this.emit("completemultiple",a)),this.options.autoProcessQueue?this.processQueue():void 0},c}(b),a.version="4.3.0",a.options={},a.optionsForElement=function(b){return b.getAttribute("id")?a.options[c(b.getAttribute("id"))]:void 0},a.instances=[],a.forElement=function(a){if("string"==typeof a&&(a=document.querySelector(a)),null==(null!=a?a.dropzone:void 0))throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");return a.dropzone},a.autoDiscover=!0,a.discover=function(){var b,c,d,e,f,g;for(document.querySelectorAll?d=document.querySelectorAll(".dropzone"):(d=[],b=function(a){var b,c,e,f;for(f=[],c=0,e=a.length;e>c;c++)b=a[c],f.push(/(^| )dropzone($| )/.test(b.className)?d.push(b):void 0);return f},b(document.getElementsByTagName("div")),b(document.getElementsByTagName("form"))),g=[],e=0,f=d.length;f>e;e++)c=d[e],g.push(a.optionsForElement(c)!==!1?new a(c):void 0);return g},a.blacklistedBrowsers=[/opera.*Macintosh.*version\/12/i],a.isBrowserSupported=function(){var b,c,d,e,f;if(b=!0,window.File&&window.FileReader&&window.FileList&&window.Blob&&window.FormData&&document.querySelector)if("classList"in document.createElement("a"))for(f=a.blacklistedBrowsers,d=0,e=f.length;e>d;d++)c=f[d],c.test(navigator.userAgent)&&(b=!1);else b=!1;else b=!1;return b},h=function(a,b){var c,d,e,f;for(f=[],d=0,e=a.length;e>d;d++)c=a[d],c!==b&&f.push(c);return f},c=function(a){return a.replace(/[\-_](\w)/g,function(a){return a.charAt(1).toUpperCase()})},a.createElement=function(a){var b;return b=document.createElement("div"),b.innerHTML=a,b.childNodes[0]},a.elementInside=function(a,b){if(a===b)return!0;for(;a=a.parentNode;)if(a===b)return!0;return!1},a.getElement=function(a,b){var c;if("string"==typeof a?c=document.querySelector(a):null!=a.nodeType&&(c=a),null==c)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector or a plain HTML element.");return c},a.getElements=function(a,b){var c,d,e,f,g,h,i,j;if(a instanceof Array){e=[];try{for(f=0,h=a.length;h>f;f++)d=a[f],e.push(this.getElement(d,b))}catch(k){c=k,e=null}}else if("string"==typeof a)for(e=[],j=document.querySelectorAll(a),g=0,i=j.length;i>g;g++)d=j[g],e.push(d);else null!=a.nodeType&&(e=[a]);if(null==e||!e.length)throw new Error("Invalid `"+b+"` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");return e},a.confirm=function(a,b,c){return window.confirm(a)?b():null!=c?c():void 0},a.isValidFile=function(a,b){var c,d,e,f,g;if(!b)return!0;for(b=b.split(","),d=a.type,c=d.replace(/\/.*$/,""),f=0,g=b.length;g>f;f++)if(e=b[f],e=e.trim(),"."===e.charAt(0)){if(-1!==a.name.toLowerCase().indexOf(e.toLowerCase(),a.name.length-e.length))return!0}else if(/\/\*$/.test(e)){if(c===e.replace(/\/.*$/,""))return!0
}else if(d===e)return!0;return!1},"undefined"!=typeof jQuery&&null!==jQuery&&(jQuery.fn.dropzone=function(b){return this.each(function(){return new a(this,b)})}),"undefined"!=typeof module&&null!==module?module.exports=a:window.Dropzone=a,a.ADDED="added",a.QUEUED="queued",a.ACCEPTED=a.QUEUED,a.UPLOADING="uploading",a.PROCESSING=a.UPLOADING,a.CANCELED="canceled",a.ERROR="error",a.SUCCESS="success",e=function(a){var b,c,d,e,f,g,h,i,j,k;for(h=a.naturalWidth,g=a.naturalHeight,c=document.createElement("canvas"),c.width=1,c.height=g,d=c.getContext("2d"),d.drawImage(a,0,0),e=d.getImageData(0,0,1,g).data,k=0,f=g,i=g;i>k;)b=e[4*(i-1)+3],0===b?f=i:k=i,i=f+k>>1;return j=i/g,0===j?1:j},f=function(a,b,c,d,f,g,h,i,j,k){var l;return l=e(b),a.drawImage(b,c,d,f,g,h,i,j,k/l)},d=function(a,b){var c,d,e,f,g,h,i,j,k;if(e=!1,k=!0,d=a.document,j=d.documentElement,c=d.addEventListener?"addEventListener":"attachEvent",i=d.addEventListener?"removeEventListener":"detachEvent",h=d.addEventListener?"":"on",f=function(c){return"readystatechange"!==c.type||"complete"===d.readyState?(("load"===c.type?a:d)[i](h+c.type,f,!1),!e&&(e=!0)?b.call(a,c.type||c):void 0):void 0},g=function(){var a;try{j.doScroll("left")}catch(b){return a=b,void setTimeout(g,50)}return f("poll")},"complete"!==d.readyState){if(d.createEventObject&&j.doScroll){try{k=!a.frameElement}catch(l){}k&&g()}return d[c](h+"DOMContentLoaded",f,!1),d[c](h+"readystatechange",f,!1),a[c](h+"load",f,!1)}},a._autoDiscoverFunction=function(){return a.autoDiscover?a.discover():void 0},d(window,a._autoDiscoverFunction)}).call(this);

/*$("#file-dropzone").dropzone({ url: "file-build.php"
 });

dropzone.on("complete", function(file) {
  console.log(file)
});
*/

$(function() {
  // Now that the DOM is fully loaded, create the dropzone, and setup the
  // event listeners
  var myDropzone = new Dropzone("#file-dropzone");
  myDropzone.on("addedfile", function(file) {
     console.log(file)
  });
})

</script>
	
</body>
</html>