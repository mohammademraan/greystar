<!-- Start of Text (www.text.com) code -->
<style>
  /* Keep the Text/LiveChat widget above the mobile navigation. */
  #chat-widget,
  #chat-widget-container,
  #livechat-compact-container,
  #livechat-full,
  iframe[src*="livechatinc.com"],
  iframe[src*="text.com"] {
    bottom: 28px !important;
    right: 24px !important;
  }

  @media (max-width: 768px) {
    #chat-widget,
    #chat-widget-container,
    #livechat-compact-container,
    #livechat-full,
    iframe[src*="livechatinc.com"],
    iframe[src*="text.com"] {
      bottom: 94px !important;
      right: 16px !important;
      z-index: 99998 !important;
    }
  }
</style>

<script>
  window.__lc = window.__lc || {};
  window.__lc.organizationId = "a321120a-9872-4eeb-bfd1-60306b74efa5";
  window.__lc.integration_name = "manual_onboarding";
  window.__lc.product_name = "text";
  ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))

  function openLiveChat() {
    if (window.LiveChatWidget) {
      window.LiveChatWidget.call("maximize");
    }
  }

  function adjustTextLiveChatPosition() {
    var isMobile = window.innerWidth <= 768;
    var targetBottom = isMobile ? '94px' : '28px';
    var targetRight = isMobile ? '16px' : '24px';
    var widgets = document.querySelectorAll(
      '#chat-widget, #chat-widget-container, #livechat-compact-container, #livechat-full, ' +
      'iframe[src*="livechatinc.com"], iframe[src*="text.com"]'
    );

    widgets.forEach(function(widget) {
      if (widget) {
        widget.style.setProperty('bottom', targetBottom, 'important');
        widget.style.setProperty('right', targetRight, 'important');
        if (isMobile) {
          widget.style.setProperty('z-index', '99998', 'important');
        }
      }
    });
  }

  window.addEventListener('resize', adjustTextLiveChatPosition);
  window.addEventListener('load', function() {
    setTimeout(adjustTextLiveChatPosition, 600);
    setTimeout(adjustTextLiveChatPosition, 1800);
    setTimeout(adjustTextLiveChatPosition, 3500);
  });
</script>
<noscript><a href="https://www.text.com/chat-with-ai-agent/a321120a-9872-4eeb-bfd1-60306b74efa5/" rel="nofollow">Chat with AI Agent</a>, powered by <a href="https://www.text.com/" rel="noopener nofollow" target="_blank">Text</a></noscript>
<!-- End of Text code -->
