<h1 ng-if="activeTheater">
  <?= $this->Html->image('wab_logo.png',array());?>
</h1>
<div class="col-md-12 nav-header-stream">
  <ul class="nav-header-stream nav nav-tabs col-md-8 embed-responsive">
    <li role="presentation" ng-click="theaterOn()">
      <a href="#"> <span class="glyphicon glyphicon-fullscreen"></span>  Mode Theatre</a>
    </li>
  </ul>
</div>
<div ng-class="{'embed-responsive-theaterMode': activeTheater}" class="col-md-9 embed-responsive embed-responsive-16by9">
  <!-- 16:9 aspect ratio -->
  <iframe  frameborder="0" class="embed-responsive-item" src="http://player.twitch.tv/?channel=weareb0b" scrolling="no" allowFullScreen="true"></iframe>
</div>
<div ng-class="{'embed-responsive-theaterMode': activeTheater}" class="col-md-3 embed-responsive embed-responsive-16by9">
  <iframe frameborder="0"
          class="embed-responsive-item"
          scrolling="no"
          id="chat_embed"
          src="http://www.twitch.tv/weareb0b/chat">
  </iframe>
</div>
