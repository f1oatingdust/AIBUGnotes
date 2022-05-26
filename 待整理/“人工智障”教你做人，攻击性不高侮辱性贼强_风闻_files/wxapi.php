 
wx.config({
    debug: false,
    appId: 'wxe34e705e29b69684',
    timestamp: 1653399748,
    nonceStr: '0ewmmdJ7C2UMvJVk',
    signature: 'd24a69c371aa219a48ab0764858d99e1e71b758c',
    jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage','onMenuShareQQ']// 所有要调用的 API 都要加到这个列表中
  });
  title = title;
		wx.ready(function () { 
			// 在这里调用 API
			//发送给朋友
			wx.onMenuShareAppMessage({
			title: title, // 分享标题
			desc: summary, // 分享描述
			link: window.location.href, // 分享链接
			imgUrl: pic, // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
				// 用户确认分享后执行的回调函数
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
			}
		}); 
		
		//分享到朋友圈
		wx.onMenuShareTimeline({
			title: title, // 分享标题
			link: window.location.href, // 分享链接
			imgUrl: pic, // 分享图标
			success: function () { 
				// 用户确认分享后执行的回调函数
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
			}
		});
		
		//分享到手机QQ
		wx.onMenuShareQQ({
			title: title, // 分享标题
			desc: summary, // 分享描述
			link: window.location.href, // 分享链接
			imgUrl: pic, // 分享图标
			success: function () { 
			   // 用户确认分享后执行的回调函数
			},
			cancel: function () { 
			   // 用户取消分享后执行的回调函数
			}
		});
}); 
