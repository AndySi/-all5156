var vm = new Vue({
	el: '#app',
	data: {
		userInfo: {
			nickName: '白天不懂夜的嗨',
			age: '18',
			email: '917661718@qq.com',
			phone: '185 xxxx 3183',
			job: 'Freelancer',
			address: '湖南长沙'
		},
		skillList: [
			'Python',
			'PHP',
			'Html',
			'Java'
		],
		talkList: [
			{content: '如果一个人不知道他要驶向哪个码头，那么任何风都不会是顺风', type: 1},
			{content: '没有什么正确的选择，努力使当初的选择变的正确', type: 1},
			{content: '人生就像一杯茶，不会苦一辈子，但总会苦一阵子', type: 1},
			{content: '生活有苦有甜，才叫完整。日子有阴有晴，才叫自然。心情有悲有喜，才叫体会。爱情有闹有和，才叫情趣', type: 2},
			{content: '身健如山，心静似水，淡泊名利。这是人生的最高境界，谁能活得如此境界，谁的一生就活得自在', type: 2},
			{content: '真正的坚韧，应该是哭的时候要彻底，笑的时候要开怀，说的时候要淋漓尽致，做的时候要毫不犹豫', type: 2},
		],
		articleList: [
			{cover:'static/images/blog-4.jpg', title: '网络攻防', desc: '计算机安全知识你了解多少'}
		],
		teamNumberList: [
			{name: 'zsi', avatar: 'static/images/team-1.png', profession: 'Java程序猿'},
			{name: 'DN', avatar: 'static/images/team-2.png', profession: 'Web程序猿'},
		]
	},
	created: function () {
		this.initEvent();
	},
	methods: {
		initEvent: function () {
			$(window).on('resize', function() {
				var clientHeight = document.documentElement.clientHeight; //获取可视区域的高度
				$('.page-home').height(clientHeight);
			}).trigger('resize');

			$(window).on('scroll', function() {
				var ScrollTop = $('.go-top');
				if($(window).scrollTop() > 1000) {
					ScrollTop.show(1000);
				} else {
					ScrollTop.fadeOut(100);
				}
				var scrollTop = $(window).scrollTop();
				if(scrollTop > 300) {
					$('.page-nav').addClass('nav-fixed');
				} else {
					$('.page-nav').removeClass('nav-fixed');
				}
			});
			/*--window load functions--*/
			$(window).on('load', function() {
				var preLoder = $(".preloader");
				preLoder.fadeOut(1000);
			});
		},
		circleProg: function (val, color, selector) {
			selector.append('<span>' + val.substr(1) + ' % </span>');
			selector.circleProgress({
				value: val,
				size: 150,
				fill: {
					color: color
				},
				thickness: 10,
				lineCap: 'round',
				emptyFill: "#ddd"
			});
		}
	},
	updated : {

	},
	mounted: function () {
		this.circleProg('.65', '#00B9E4', $('#circle-1'));
		this.circleProg('.75', '#DF457E', $('#circle-2'));
		this.circleProg('.85', '#2FD4BE', $('#circle-3'));
		this.circleProg('.95', '#F28055', $('#circle-4'));

		/*---- Stats Counter ---*/
		var counterZero = '0';
		$('.stats-number').text(counterZero);

		$('.stats-number').waypoint(function() {
			$('.stats-number').each(function() {
				var $this = $(this);
				$({
					Counter: 0
				}).animate({
					Counter: $this.attr('data-stop')
				}, {
					duration: 5000,
					easing: 'swing',
					step: function(now) {
						$this.text(Math.ceil(now));
					}
				});
			});
			this.destroy();
		}, {
			offset: '75%'
		});
		/*---- end Counter ---*/

		var Container = $('.container');
		Container.imagesLoaded(function() {
			var festivarMasonry = $('.portolio-masonary').isotope({
				layoutMode: 'fitRows',
				itemSelector: '.grid-size'
			});
			$(document).on('click', '.porfolio-menu li', function() {
				var filterValue = $(this).attr('data-filter');
				festivarMasonry.isotope({
					filter: filterValue
				});
			});
		});

		/*---- portfolio menu active  ------*/
		var portfolioMenu = '.porfolio-menu li';
		$(document).on('click', portfolioMenu, function() {
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
		});

		/* smoth scroll*/
		$('#main-menu li a').on('click', function(event) {
			event.preventDefault();
			var anchor = $(this).attr('href');
			var top = $(anchor).offset().top;
			$('html, body').animate({
				scrollTop: ($(anchor).offset().top - 20)
			}, 1000);
		});
		$('.page-home a').on('click', function(event) {
			event.preventDefault();
			var anchor = $(this).attr('href');
			var top = $(anchor).offset().top;
			$('html, body').animate({
				scrollTop: ($(anchor).offset().top - 20)
			}, 1000);
		});
		/*bottom to top*/
		$(document).on('click', '.go-top', function() {
			$("html,body").animate({
				scrollTop: 0
			}, 1000);
		});
		/*--slick Nav Responsive Navbar activation--*/
		var SlicMenu = $('#main-menu');
		SlicMenu.slicknav();
		/*--- scroll spy activate --*/
		new ScrollSpy('#main-menu', {
			nav: '#main-menu > li a',
			className: 'active'
		});
	}
})