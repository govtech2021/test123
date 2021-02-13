<script>
  window.watsonAssistantChatOptions = {
      integrationID: "3a2e7fe3-622f-4eba-a3d0-deffbe9c2a99", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "cdaa8ff3-b6fb-4ac3-920b-61df16e256f4", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>