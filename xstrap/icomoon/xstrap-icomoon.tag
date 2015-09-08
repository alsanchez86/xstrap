<xstrap-icomoon>
	<span class="icomoon-{icon} icomoon"></span>

	<script>
		var self = this;

		self.store 	= searchStore;
		self.icon 	= self.opts.icon;

		self.root.style.position 	= 'absolute';
		self.root.fontSize 			= self.opts.size;
		self.root.color 			= self.opts.color;
	</script>

	<style type="text/less" scoped>
		/* VARS */
		@icomoon-font-family: 'IcoMoon-Free';
		@icomoon-font-size:   18px;

		/* MIXINS */
		.icomoon (
		    @hash: ''
		){

  			content: '@{hash}';
  			position: relative;
  			top: 1px;
  			display: inline-block;

  			font-family: @icomoon-font-family;
  			font-size: @icomoon-font-size;
  			speak: none;
  			font-style: normal;
  			font-weight: normal;
  			font-variant: normal;
  			text-transform: none;

  			-webkit-font-smoothing: antialiased;
  			-moz-osx-font-smoothing: grayscale;
		}

		/* LESS */
		@font-face {
			font-family: @icomoon-font-family;
			src: url('./xstrap/icomoon/fonts/icomoon.ttf?-b7qzp2') format('truetype');
		}

		.icomoon {
		  .icomoon ();
		}

		.icomoon-home:before {
		  content: "\e900";
		}
		.icomoon-home2:before {
		  content: "\e901";
		}
		.icomoon-home3:before {
		  content: "\e902";
		}
		.icomoon-office:before {
		  content: "\e903";
		}
		.icomoon-newspaper:before {
		  content: "\e904";
		}
		.icomoon-pencil:before {
		  content: "\e905";
		}
		.icomoon-pencil2:before {
		  content: "\e906";
		}
		.icomoon-quill:before {
		  content: "\e907";
		}
		.icomoon-pen:before {
		  content: "\e908";
		}
		.icomoon-blog:before {
		  content: "\e909";
		}
		.icomoon-eyedropper:before {
		  content: "\e90a";
		}
		.icomoon-droplet:before {
		  content: "\e90b";
		}
		.icomoon-paint-format:before {
		  content: "\e90c";
		}
		.icomoon-image:before {
		  content: "\e90d";
		}
		.icomoon-images:before {
		  content: "\e90e";
		}
		.icomoon-camera:before {
		  content: "\e90f";
		}
		.icomoon-headphones:before {
		  content: "\e910";
		}
		.icomoon-music:before {
		  content: "\e911";
		}
		.icomoon-play:before {
		  content: "\e912";
		}
		.icomoon-film:before {
		  content: "\e913";
		}
		.icomoon-video-camera:before {
		  content: "\e914";
		}
		.icomoon-dice:before {
		  content: "\e915";
		}
		.icomoon-pacman:before {
		  content: "\e916";
		}
		.icomoon-spades:before {
		  content: "\e917";
		}
		.icomoon-clubs:before {
		  content: "\e918";
		}
		.icomoon-diamonds:before {
		  content: "\e919";
		}
		.icomoon-bullhorn:before {
		  content: "\e91a";
		}
		.icomoon-connection:before {
		  content: "\e91b";
		}
		.icomoon-podcast:before {
		  content: "\e91c";
		}
		.icomoon-feed:before {
		  content: "\e91d";
		}
		.icomoon-mic:before {
		  content: "\e91e";
		}
		.icomoon-book:before {
		  content: "\e91f";
		}
		.icomoon-books:before {
		  content: "\e920";
		}
		.icomoon-library:before {
		  content: "\e921";
		}
		.icomoon-file-text:before {
		  content: "\e922";
		}
		.icomoon-profile:before {
		  content: "\e923";
		}
		.icomoon-file-empty:before {
		  content: "\e924";
		}
		.icomoon-files-empty:before {
		  content: "\e925";
		}
		.icomoon-file-text2:before {
		  content: "\e926";
		}
		.icomoon-file-picture:before {
		  content: "\e927";
		}
		.icomoon-file-music:before {
		  content: "\e928";
		}
		.icomoon-file-play:before {
		  content: "\e929";
		}
		.icomoon-file-video:before {
		  content: "\e92a";
		}
		.icomoon-file-zip:before {
		  content: "\e92b";
		}
		.icomoon-copy:before {
		  content: "\e92c";
		}
		.icomoon-paste:before {
		  content: "\e92d";
		}
		.icomoon-stack:before {
		  content: "\e92e";
		}
		.icomoon-folder:before {
		  content: "\e92f";
		}
		.icomoon-folder-open:before {
		  content: "\e930";
		}
		.icomoon-folder-plus:before {
		  content: "\e931";
		}
		.icomoon-folder-minus:before {
		  content: "\e932";
		}
		.icomoon-folder-download:before {
		  content: "\e933";
		}
		.icomoon-folder-upload:before {
		  content: "\e934";
		}
		.icomoon-price-tag:before {
		  content: "\e935";
		}
		.icomoon-price-tags:before {
		  content: "\e936";
		}
		.icomoon-barcode:before {
		  content: "\e937";
		}
		.icomoon-qrcode:before {
		  content: "\e938";
		}
		.icomoon-ticket:before {
		  content: "\e939";
		}
		.icomoon-cart:before {
		  content: "\e93a";
		}
		.icomoon-coin-dollar:before {
		  content: "\e93b";
		}
		.icomoon-coin-euro:before {
		  content: "\e93c";
		}
		.icomoon-coin-pound:before {
		  content: "\e93d";
		}
		.icomoon-coin-yen:before {
		  content: "\e93e";
		}
		.icomoon-credit-card:before {
		  content: "\e93f";
		}
		.icomoon-calculator:before {
		  content: "\e940";
		}
		.icomoon-lifebuoy:before {
		  content: "\e941";
		}
		.icomoon-phone:before {
		  content: "\e942";
		}
		.icomoon-phone-hang-up:before {
		  content: "\e943";
		}
		.icomoon-address-book:before {
		  content: "\e944";
		}
		.icomoon-envelop:before {
		  content: "\e945";
		}
		.icomoon-pushpin:before {
		  content: "\e946";
		}
		.icomoon-location:before {
		  content: "\e947";
		}
		.icomoon-location2:before {
		  content: "\e948";
		}
		.icomoon-compass:before {
		  content: "\e949";
		}
		.icomoon-compass2:before {
		  content: "\e94a";
		}
		.icomoon-map:before {
		  content: "\e94b";
		}
		.icomoon-map2:before {
		  content: "\e94c";
		}
		.icomoon-history:before {
		  content: "\e94d";
		}
		.icomoon-clock:before {
		  content: "\e94e";
		}
		.icomoon-clock2:before {
		  content: "\e94f";
		}
		.icomoon-alarm:before {
		  content: "\e950";
		}
		.icomoon-bell:before {
		  content: "\e951";
		}
		.icomoon-stopwatch:before {
		  content: "\e952";
		}
		.icomoon-calendar:before {
		  content: "\e953";
		}
		.icomoon-printer:before {
		  content: "\e954";
		}
		.icomoon-keyboard:before {
		  content: "\e955";
		}
		.icomoon-display:before {
		  content: "\e956";
		}
		.icomoon-laptop:before {
		  content: "\e957";
		}
		.icomoon-mobile:before {
		  content: "\e958";
		}
		.icomoon-mobile2:before {
		  content: "\e959";
		}
		.icomoon-tablet:before {
		  content: "\e95a";
		}
		.icomoon-tv:before {
		  content: "\e95b";
		}
		.icomoon-drawer:before {
		  content: "\e95c";
		}
		.icomoon-drawer2:before {
		  content: "\e95d";
		}
		.icomoon-box-add:before {
		  content: "\e95e";
		}
		.icomoon-box-remove:before {
		  content: "\e95f";
		}
		.icomoon-download:before {
		  content: "\e960";
		}
		.icomoon-upload:before {
		  content: "\e961";
		}
		.icomoon-floppy-disk:before {
		  content: "\e962";
		}
		.icomoon-drive:before {
		  content: "\e963";
		}
		.icomoon-database:before {
		  content: "\e964";
		}
		.icomoon-undo:before {
		  content: "\e965";
		}
		.icomoon-redo:before {
		  content: "\e966";
		}
		.icomoon-undo2:before {
		  content: "\e967";
		}
		.icomoon-redo2:before {
		  content: "\e968";
		}
		.icomoon-forward:before {
		  content: "\e969";
		}
		.icomoon-reply:before {
		  content: "\e96a";
		}
		.icomoon-bubble:before {
		  content: "\e96b";
		}
		.icomoon-bubbles:before {
		  content: "\e96c";
		}
		.icomoon-bubbles2:before {
		  content: "\e96d";
		}
		.icomoon-bubble2:before {
		  content: "\e96e";
		}
		.icomoon-bubbles3:before {
		  content: "\e96f";
		}
		.icomoon-bubbles4:before {
		  content: "\e970";
		}
		.icomoon-user:before {
		  content: "\e971";
		}
		.icomoon-users:before {
		  content: "\e972";
		}
		.icomoon-user-plus:before {
		  content: "\e973";
		}
		.icomoon-user-minus:before {
		  content: "\e974";
		}
		.icomoon-user-check:before {
		  content: "\e975";
		}
		.icomoon-user-tie:before {
		  content: "\e976";
		}
		.icomoon-quotes-left:before {
		  content: "\e977";
		}
		.icomoon-quotes-right:before {
		  content: "\e978";
		}
		.icomoon-hour-glass:before {
		  content: "\e979";
		}
		.icomoon-spinner:before {
		  content: "\e97a";
		}
		.icomoon-spinner2:before {
		  content: "\e97b";
		}
		.icomoon-spinner3:before {
		  content: "\e97c";
		}
		.icomoon-spinner4:before {
		  content: "\e97d";
		}
		.icomoon-spinner5:before {
		  content: "\e97e";
		}
		.icomoon-spinner6:before {
		  content: "\e97f";
		}
		.icomoon-spinner7:before {
		  content: "\e980";
		}
		.icomoon-spinner8:before {
		  content: "\e981";
		}
		.icomoon-spinner9:before {
		  content: "\e982";
		}
		.icomoon-spinner10:before {
		  content: "\e983";
		}
		.icomoon-spinner11:before {
		  content: "\e984";
		}
		.icomoon-binoculars:before {
		  content: "\e985";
		}
		.icomoon-search:before {
		  content: "\e986";
		}
		.icomoon-zoom-in:before {
		  content: "\e987";
		}
		.icomoon-zoom-out:before {
		  content: "\e988";
		}
		.icomoon-enlarge:before {
		  content: "\e989";
		}
		.icomoon-shrink:before {
		  content: "\e98a";
		}
		.icomoon-enlarge2:before {
		  content: "\e98b";
		}
		.icomoon-shrink2:before {
		  content: "\e98c";
		}
		.icomoon-key:before {
		  content: "\e98d";
		}
		.icomoon-key2:before {
		  content: "\e98e";
		}
		.icomoon-lock:before {
		  content: "\e98f";
		}
		.icomoon-unlocked:before {
		  content: "\e990";
		}
		.icomoon-wrench:before {
		  content: "\e991";
		}
		.icomoon-equalizer:before {
		  content: "\e992";
		}
		.icomoon-equalizer2:before {
		  content: "\e993";
		}
		.icomoon-cog:before {
		  content: "\e994";
		}
		.icomoon-cogs:before {
		  content: "\e995";
		}
		.icomoon-hammer:before {
		  content: "\e996";
		}
		.icomoon-magic-wand:before {
		  content: "\e997";
		}
		.icomoon-aid-kit:before {
		  content: "\e998";
		}
		.icomoon-bug:before {
		  content: "\e999";
		}
		.icomoon-pie-chart:before {
		  content: "\e99a";
		}
		.icomoon-stats-dots:before {
		  content: "\e99b";
		}
		.icomoon-stats-bars:before {
		  content: "\e99c";
		}
		.icomoon-stats-bars2:before {
		  content: "\e99d";
		}
		.icomoon-trophy:before {
		  content: "\e99e";
		}
		.icomoon-gift:before {
		  content: "\e99f";
		}
		.icomoon-glass:before {
		  content: "\e9a0";
		}
		.icomoon-glass2:before {
		  content: "\e9a1";
		}
		.icomoon-mug:before {
		  content: "\e9a2";
		}
		.icomoon-spoon-knife:before {
		  content: "\e9a3";
		}
		.icomoon-leaf:before {
		  content: "\e9a4";
		}
		.icomoon-rocket:before {
		  content: "\e9a5";
		}
		.icomoon-meter:before {
		  content: "\e9a6";
		}
		.icomoon-meter2:before {
		  content: "\e9a7";
		}
		.icomoon-hammer2:before {
		  content: "\e9a8";
		}
		.icomoon-fire:before {
		  content: "\e9a9";
		}
		.icomoon-lab:before {
		  content: "\e9aa";
		}
		.icomoon-magnet:before {
		  content: "\e9ab";
		}
		.icomoon-bin:before {
		  content: "\e9ac";
		}
		.icomoon-bin2:before {
		  content: "\e9ad";
		}
		.icomoon-briefcase:before {
		  content: "\e9ae";
		}
		.icomoon-airplane:before {
		  content: "\e9af";
		}
		.icomoon-truck:before {
		  content: "\e9b0";
		}
		.icomoon-road:before {
		  content: "\e9b1";
		}
		.icomoon-accessibility:before {
		  content: "\e9b2";
		}
		.icomoon-target:before {
		  content: "\e9b3";
		}
		.icomoon-shield:before {
		  content: "\e9b4";
		}
		.icomoon-power:before {
		  content: "\e9b5";
		}
		.icomoon-switch:before {
		  content: "\e9b6";
		}
		.icomoon-power-cord:before {
		  content: "\e9b7";
		}
		.icomoon-clipboard:before {
		  content: "\e9b8";
		}
		.icomoon-list-numbered:before {
		  content: "\e9b9";
		}
		.icomoon-list:before {
		  content: "\e9ba";
		}
		.icomoon-list2:before {
		  content: "\e9bb";
		}
		.icomoon-tree:before {
		  content: "\e9bc";
		}
		.icomoon-menu:before {
		  content: "\e9bd";
		}
		.icomoon-menu2:before {
		  content: "\e9be";
		}
		.icomoon-menu3:before {
		  content: "\e9bf";
		}
		.icomoon-menu4:before {
		  content: "\e9c0";
		}
		.icomoon-cloud:before {
		  content: "\e9c1";
		}
		.icomoon-cloud-download:before {
		  content: "\e9c2";
		}
		.icomoon-cloud-upload:before {
		  content: "\e9c3";
		}
		.icomoon-cloud-check:before {
		  content: "\e9c4";
		}
		.icomoon-download2:before {
		  content: "\e9c5";
		}
		.icomoon-upload2:before {
		  content: "\e9c6";
		}
		.icomoon-download3:before {
		  content: "\e9c7";
		}
		.icomoon-upload3:before {
		  content: "\e9c8";
		}
		.icomoon-sphere:before {
		  content: "\e9c9";
		}
		.icomoon-earth:before {
		  content: "\e9ca";
		}
		.icomoon-link:before {
		  content: "\e9cb";
		}
		.icomoon-flag:before {
		  content: "\e9cc";
		}
		.icomoon-attachment:before {
		  content: "\e9cd";
		}
		.icomoon-eye:before {
		  content: "\e9ce";
		}
		.icomoon-eye-plus:before {
		  content: "\e9cf";
		}
		.icomoon-eye-minus:before {
		  content: "\e9d0";
		}
		.icomoon-eye-blocked:before {
		  content: "\e9d1";
		}
		.icomoon-bookmark:before {
		  content: "\e9d2";
		}
		.icomoon-bookmarks:before {
		  content: "\e9d3";
		}
		.icomoon-sun:before {
		  content: "\e9d4";
		}
		.icomoon-contrast:before {
		  content: "\e9d5";
		}
		.icomoon-brightness-contrast:before {
		  content: "\e9d6";
		}
		.icomoon-star-empty:before {
		  content: "\e9d7";
		}
		.icomoon-star-half:before {
		  content: "\e9d8";
		}
		.icomoon-star-full:before {
		  content: "\e9d9";
		}
		.icomoon-heart:before {
		  content: "\e9da";
		}
		.icomoon-heart-broken:before {
		  content: "\e9db";
		}
		.icomoon-man:before {
		  content: "\e9dc";
		}
		.icomoon-woman:before {
		  content: "\e9dd";
		}
		.icomoon-man-woman:before {
		  content: "\e9de";
		}
		.icomoon-happy:before {
		  content: "\e9df";
		}
		.icomoon-happy2:before {
		  content: "\e9e0";
		}
		.icomoon-smile:before {
		  content: "\e9e1";
		}
		.icomoon-smile2:before {
		  content: "\e9e2";
		}
		.icomoon-tongue:before {
		  content: "\e9e3";
		}
		.icomoon-tongue2:before {
		  content: "\e9e4";
		}
		.icomoon-sad:before {
		  content: "\e9e5";
		}
		.icomoon-sad2:before {
		  content: "\e9e6";
		}
		.icomoon-wink:before {
		  content: "\e9e7";
		}
		.icomoon-wink2:before {
		  content: "\e9e8";
		}
		.icomoon-grin:before {
		  content: "\e9e9";
		}
		.icomoon-grin2:before {
		  content: "\e9ea";
		}
		.icomoon-cool:before {
		  content: "\e9eb";
		}
		.icomoon-cool2:before {
		  content: "\e9ec";
		}
		.icomoon-angry:before {
		  content: "\e9ed";
		}
		.icomoon-angry2:before {
		  content: "\e9ee";
		}
		.icomoon-evil:before {
		  content: "\e9ef";
		}
		.icomoon-evil2:before {
		  content: "\e9f0";
		}
		.icomoon-shocked:before {
		  content: "\e9f1";
		}
		.icomoon-shocked2:before {
		  content: "\e9f2";
		}
		.icomoon-baffled:before {
		  content: "\e9f3";
		}
		.icomoon-baffled2:before {
		  content: "\e9f4";
		}
		.icomoon-confused:before {
		  content: "\e9f5";
		}
		.icomoon-confused2:before {
		  content: "\e9f6";
		}
		.icomoon-neutral:before {
		  content: "\e9f7";
		}
		.icomoon-neutral2:before {
		  content: "\e9f8";
		}
		.icomoon-hipster:before {
		  content: "\e9f9";
		}
		.icomoon-hipster2:before {
		  content: "\e9fa";
		}
		.icomoon-wondering:before {
		  content: "\e9fb";
		}
		.icomoon-wondering2:before {
		  content: "\e9fc";
		}
		.icomoon-sleepy:before {
		  content: "\e9fd";
		}
		.icomoon-sleepy2:before {
		  content: "\e9fe";
		}
		.icomoon-frustrated:before {
		  content: "\e9ff";
		}
		.icomoon-frustrated2:before {
		  content: "\ea00";
		}
		.icomoon-crying:before {
		  content: "\ea01";
		}
		.icomoon-crying2:before {
		  content: "\ea02";
		}
		.icomoon-point-up:before {
		  content: "\ea03";
		}
		.icomoon-point-right:before {
		  content: "\ea04";
		}
		.icomoon-point-down:before {
		  content: "\ea05";
		}
		.icomoon-point-left:before {
		  content: "\ea06";
		}
		.icomoon-warning:before {
		  content: "\ea07";
		}
		.icomoon-notification:before {
		  content: "\ea08";
		}
		.icomoon-question:before {
		  content: "\ea09";
		}
		.icomoon-plus:before {
		  content: "\ea0a";
		}
		.icomoon-minus:before {
		  content: "\ea0b";
		}
		.icomoon-info:before {
		  content: "\ea0c";
		}
		.icomoon-cancel-circle:before {
		  content: "\ea0d";
		}
		.icomoon-blocked:before {
		  content: "\ea0e";
		}
		.icomoon-cross:before {
		  content: "\ea0f";
		}
		.icomoon-checkmark:before {
		  content: "\ea10";
		}
		.icomoon-checkmark2:before {
		  content: "\ea11";
		}
		.icomoon-spell-check:before {
		  content: "\ea12";
		}
		.icomoon-enter:before {
		  content: "\ea13";
		}
		.icomoon-exit:before {
		  content: "\ea14";
		}
		.icomoon-play2:before {
		  content: "\ea15";
		}
		.icomoon-pause:before {
		  content: "\ea16";
		}
		.icomoon-stop:before {
		  content: "\ea17";
		}
		.icomoon-previous:before {
		  content: "\ea18";
		}
		.icomoon-next:before {
		  content: "\ea19";
		}
		.icomoon-backward:before {
		  content: "\ea1a";
		}
		.icomoon-forward2:before {
		  content: "\ea1b";
		}
		.icomoon-play3:before {
		  content: "\ea1c";
		}
		.icomoon-pause2:before {
		  content: "\ea1d";
		}
		.icomoon-stop2:before {
		  content: "\ea1e";
		}
		.icomoon-backward2:before {
		  content: "\ea1f";
		}
		.icomoon-forward3:before {
		  content: "\ea20";
		}
		.icomoon-first:before {
		  content: "\ea21";
		}
		.icomoon-last:before {
		  content: "\ea22";
		}
		.icomoon-previous2:before {
		  content: "\ea23";
		}
		.icomoon-next2:before {
		  content: "\ea24";
		}
		.icomoon-eject:before {
		  content: "\ea25";
		}
		.icomoon-volume-high:before {
		  content: "\ea26";
		}
		.icomoon-volume-medium:before {
		  content: "\ea27";
		}
		.icomoon-volume-low:before {
		  content: "\ea28";
		}
		.icomoon-volume-mute:before {
		  content: "\ea29";
		}
		.icomoon-volume-mute2:before {
		  content: "\ea2a";
		}
		.icomoon-volume-increase:before {
		  content: "\ea2b";
		}
		.icomoon-volume-decrease:before {
		  content: "\ea2c";
		}
		.icomoon-loop:before {
		  content: "\ea2d";
		}
		.icomoon-loop2:before {
		  content: "\ea2e";
		}
		.icomoon-infinite:before {
		  content: "\ea2f";
		}
		.icomoon-shuffle:before {
		  content: "\ea30";
		}
		.icomoon-arrow-up-left:before {
		  content: "\ea31";
		}
		.icomoon-arrow-up:before {
		  content: "\ea32";
		}
		.icomoon-arrow-up-right:before {
		  content: "\ea33";
		}
		.icomoon-arrow-right:before {
		  content: "\ea34";
		}
		.icomoon-arrow-down-right:before {
		  content: "\ea35";
		}
		.icomoon-arrow-down:before {
		  content: "\ea36";
		}
		.icomoon-arrow-down-left:before {
		  content: "\ea37";
		}
		.icomoon-arrow-left:before {
		  content: "\ea38";
		}
		.icomoon-arrow-up-left2:before {
		  content: "\ea39";
		}
		.icomoon-arrow-up2:before {
		  content: "\ea3a";
		}
		.icomoon-arrow-up-right2:before {
		  content: "\ea3b";
		}
		.icomoon-arrow-right2:before {
		  content: "\ea3c";
		}
		.icomoon-arrow-down-right2:before {
		  content: "\ea3d";
		}
		.icomoon-arrow-down2:before {
		  content: "\ea3e";
		}
		.icomoon-arrow-down-left2:before {
		  content: "\ea3f";
		}
		.icomoon-arrow-left2:before {
		  content: "\ea40";
		}
		.icomoon-circle-up:before {
		  content: "\ea41";
		}
		.icomoon-circle-right:before {
		  content: "\ea42";
		}
		.icomoon-circle-down:before {
		  content: "\ea43";
		}
		.icomoon-circle-left:before {
		  content: "\ea44";
		}
		.icomoon-tab:before {
		  content: "\ea45";
		}
		.icomoon-move-up:before {
		  content: "\ea46";
		}
		.icomoon-move-down:before {
		  content: "\ea47";
		}
		.icomoon-sort-alpha-asc:before {
		  content: "\ea48";
		}
		.icomoon-sort-alpha-desc:before {
		  content: "\ea49";
		}
		.icomoon-sort-numeric-asc:before {
		  content: "\ea4a";
		}
		.icomoon-sort-numberic-desc:before {
		  content: "\ea4b";
		}
		.icomoon-sort-amount-asc:before {
		  content: "\ea4c";
		}
		.icomoon-sort-amount-desc:before {
		  content: "\ea4d";
		}
		.icomoon-command:before {
		  content: "\ea4e";
		}
		.icomoon-shift:before {
		  content: "\ea4f";
		}
		.icomoon-ctrl:before {
		  content: "\ea50";
		}
		.icomoon-opt:before {
		  content: "\ea51";
		}
		.icomoon-checkbox-checked:before {
		  content: "\ea52";
		}
		.icomoon-checkbox-unchecked:before {
		  content: "\ea53";
		}
		.icomoon-radio-checked:before {
		  content: "\ea54";
		}
		.icomoon-radio-checked2:before {
		  content: "\ea55";
		}
		.icomoon-radio-unchecked:before {
		  content: "\ea56";
		}
		.icomoon-crop:before {
		  content: "\ea57";
		}
		.icomoon-make-group:before {
		  content: "\ea58";
		}
		.icomoon-ungroup:before {
		  content: "\ea59";
		}
		.icomoon-scissors:before {
		  content: "\ea5a";
		}
		.icomoon-filter:before {
		  content: "\ea5b";
		}
		.icomoon-font:before {
		  content: "\ea5c";
		}
		.icomoon-ligature:before {
		  content: "\ea5d";
		}
		.icomoon-ligature2:before {
		  content: "\ea5e";
		}
		.icomoon-text-height:before {
		  content: "\ea5f";
		}
		.icomoon-text-width:before {
		  content: "\ea60";
		}
		.icomoon-font-size:before {
		  content: "\ea61";
		}
		.icomoon-bold:before {
		  content: "\ea62";
		}
		.icomoon-underline:before {
		  content: "\ea63";
		}
		.icomoon-italic:before {
		  content: "\ea64";
		}
		.icomoon-strikethrough:before {
		  content: "\ea65";
		}
		.icomoon-omega:before {
		  content: "\ea66";
		}
		.icomoon-sigma:before {
		  content: "\ea67";
		}
		.icomoon-page-break:before {
		  content: "\ea68";
		}
		.icomoon-superscript:before {
		  content: "\ea69";
		}
		.icomoon-subscript:before {
		  content: "\ea6a";
		}
		.icomoon-superscript2:before {
		  content: "\ea6b";
		}
		.icomoon-subscript2:before {
		  content: "\ea6c";
		}
		.icomoon-text-color:before {
		  content: "\ea6d";
		}
		.icomoon-pagebreak:before {
		  content: "\ea6e";
		}
		.icomoon-clear-formatting:before {
		  content: "\ea6f";
		}
		.icomoon-table:before {
		  content: "\ea70";
		}
		.icomoon-table2:before {
		  content: "\ea71";
		}
		.icomoon-insert-template:before {
		  content: "\ea72";
		}
		.icomoon-pilcrow:before {
		  content: "\ea73";
		}
		.icomoon-ltr:before {
		  content: "\ea74";
		}
		.icomoon-rtl:before {
		  content: "\ea75";
		}
		.icomoon-section:before {
  			content: "\ea76";
		}
		.icomoon-paragraph-left:before {
		  content: "\ea77";
		}
		.icomoon-paragraph-center:before {
		  content: "\ea78";
		}
		.icomoon-paragraph-right:before {
		  content: "\ea79";
		}
		.icomoon-paragraph-justify:before {
		  content: "\ea7a";
		}
		.icomoon-indent-increase:before {
		  content: "\ea7b";
		}
		.icomoon-indent-decrease:before {
		  content: "\ea7c";
		}
		.icomoon-share:before {
		  content: "\ea7d";
		}
		.icomoon-new-tab:before {
		  content: "\ea7e";
		}
		.icomoon-embed:before {
		  content: "\ea7f";
		}
		.icomoon-embed2:before {
		  content: "\ea80";
		}
		.icomoon-terminal:before {
		  content: "\ea81";
		}
		.icomoon-share2:before {
		  content: "\ea82";
		}
		.icomoon-mail:before {
		  content: "\ea83";
		}
		.icomoon-mail2:before {
		  content: "\ea84";
		}
		.icomoon-mail3:before {
		  content: "\ea85";
		}
		.icomoon-mail4:before {
		  content: "\ea86";
		}
		.icomoon-google:before {
		  content: "\ea87";
		}
		.icomoon-google-plus:before {
		  content: "\ea88";
		}
		.icomoon-google-plus2:before {
		  content: "\ea89";
		}
		.icomoon-google-plus3:before {
		  content: "\ea8a";
		}
		.icomoon-google-drive:before {
		  content: "\ea8b";
		}
		.icomoon-facebook:before {
		  content: "\ea8c";
		}
		.icomoon-facebook2:before {
		  content: "\ea8d";
		}
		.icomoon-facebook3:before {
		  content: "\ea8e";
		}
		.icomoon-ello:before {
		  content: "\ea8f";
		}
		.icomoon-instagram:before {
		  content: "\ea90";
		}
		.icomoon-twitter:before {
		  content: "\ea91";
		}
		.icomoon-twitter2:before {
		  content: "\ea92";
		}
		.icomoon-twitter3:before {
		  content: "\ea93";
		}
		.icomoon-feed2:before {
		  content: "\ea94";
		}
		.icomoon-feed3:before {
		  content: "\ea95";
		}
		.icomoon-feed4:before {
		  content: "\ea96";
		}
		.icomoon-youtube:before {
		  content: "\ea97";
		}
		.icomoon-youtube2:before {
		  content: "\ea98";
		}
		.icomoon-youtube3:before {
		  content: "\ea99";
		}
		.icomoon-youtube4:before {
		  content: "\ea9a";
		}
		.icomoon-twitch:before {
		  content: "\ea9b";
		}
		.icomoon-vimeo:before {
		  content: "\ea9c";
		}
		.icomoon-vimeo2:before {
		  content: "\ea9d";
		}
		.icomoon-vimeo3:before {
		  content: "\ea9e";
		}
		.icomoon-lanyrd:before {
		  content: "\ea9f";
		}
		.icomoon-flickr:before {
		  content: "\eaa0";
		}
		.icomoon-flickr2:before {
		  content: "\eaa1";
		}
		.icomoon-flickr3:before {
		  content: "\eaa2";
		}
		.icomoon-flickr4:before {
		  content: "\eaa3";
		}
		.icomoon-picassa:before {
		  content: "\eaa4";
		}
		.icomoon-picassa2:before {
		  content: "\eaa5";
		}
		.icomoon-dribbble:before {
		  content: "\eaa6";
		}
		.icomoon-dribbble2:before {
		  content: "\eaa7";
		}
		.icomoon-dribbble3:before {
		  content: "\eaa8";
		}
		.icomoon-forrst:before {
		  content: "\eaa9";
		}
		.icomoon-forrst2:before {
		  content: "\eaaa";
		}
		.icomoon-deviantart:before {
		  content: "\eaab";
		}
		.icomoon-deviantart2:before {
		  content: "\eaac";
		}
		.icomoon-steam:before {
		  content: "\eaad";
		}
		.icomoon-steam2:before {
		  content: "\eaae";
		}
		.icomoon-dropbox:before {
		  content: "\eaaf";
		}
		.icomoon-onedrive:before {
		  content: "\eab0";
		}
		.icomoon-github:before {
		  content: "\eab1";
		}
		.icomoon-github2:before {
		  content: "\eab2";
		}
		.icomoon-github3:before {
		  content: "\eab3";
		}
		.icomoon-github4:before {
		  content: "\eab4";
		}
		.icomoon-github5:before {
		  content: "\eab5";
		}
		.icomoon-wordpress:before {
		  content: "\eab6";
		}
		.icomoon-wordpress2:before {
		  content: "\eab7";
		}
		.icomoon-joomla:before {
		  content: "\eab8";
		}
		.icomoon-blogger:before {
		  content: "\eab9";
		}
		.icomoon-blogger2:before {
		  content: "\eaba";
		}
		.icomoon-tumblr:before {
		  content: "\eabb";
		}
		.icomoon-tumblr2:before {
		  content: "\eabc";
		}
		.icomoon-yahoo:before {
		  content: "\eabd";
		}
		.icomoon-tux:before {
		  content: "\eabe";
		}
		.icomoon-apple:before {
		  content: "\eabf";
		}
		.icomoon-finder:before {
		  content: "\eac0";
		}
		.icomoon-android:before {
		  content: "\eac1";
		}
		.icomoon-windows:before {
		  content: "\eac2";
		}
		.icomoon-windows8:before {
		  content: "\eac3";
		}
		.icomoon-soundcloud:before {
		  content: "\eac4";
		}
		.icomoon-soundcloud2:before {
		  content: "\eac5";
		}
		.icomoon-skype:before {
		  content: "\eac6";
		}
		.icomoon-reddit:before {
		  content: "\eac7";
		}
		.icomoon-linkedin:before {
		  content: "\eac8";
		}
		.icomoon-linkedin2:before {
		  content: "\eac9";
		}
		.icomoon-lastfm:before {
		  content: "\eaca";
		}
		.icomoon-lastfm2:before {
		  content: "\eacb";
		}
		.icomoon-delicious:before {
		  content: "\eacc";
		}
		.icomoon-stumbleupon:before {
		  content: "\eacd";
		}
		.icomoon-stumbleupon2:before {
		  content: "\eace";
		}
		.icomoon-stackoverflow:before {
		  content: "\eacf";
		}
		.icomoon-pinterest:before {
		  content: "\ead0";
		}
		.icomoon-pinterest2:before {
		  content: "\ead1";
		}
		.icomoon-xing:before {
		  content: "\ead2";
		}
		.icomoon-xing2:before {
		  content: "\ead3";
		}
		.icomoon-flattr:before {
		  content: "\ead4";
		}
		.icomoon-foursquare:before {
		  content: "\ead5";
		}
		.icomoon-paypal:before {
		  content: "\ead6";
		}
		.icomoon-paypal2:before {
		  content: "\ead7";
		}
		.icomoon-paypal3:before {
		  content: "\ead8";
		}
		.icomoon-yelp:before {
		  content: "\ead9";
		}
		.icomoon-file-pdf:before {
		  content: "\eada";
		}
		.icomoon-file-openoffice:before {
		  content: "\eadb";
		}
		.icomoon-file-word:before {
		  content: "\eadc";
		}
		.icomoon-file-excel:before {
		  content: "\eadd";
		}
		.icomoon-libreoffice:before {
		  content: "\eade";
		}
		.icomoon-html5:before {
		  content: "\eadf";
		}
		.icomoon-html52:before {
		  content: "\eae0";
		}
		.icomoon-css3:before {
		  content: "\eae1";
		}
		.icomoon-git:before {
		  content: "\eae2";
		}
		.icomoon-svg:before {
		  content: "\eae3";
		}
		.icomoon-codepen:before {
		  content: "\eae4";
		}
		.icomoon-chrome:before {
		  content: "\eae5";
		}
		.icomoon-firefox:before {
		  content: "\eae6";
		}
		.icomoon-IE:before {
		  content: "\eae7";
		}
		.icomoon-opera:before {
		  content: "\eae8";
		}
		.icomoon-safari:before {
		  content: "\eae9";
		}
		.icomoon-IcoMoon:before {
		  content: "\eaea";
		}
	</style>
</xstrap-icomoon>