
  <div class="map">
  	<div class="map__overlay" itemscope itemtype="http://schema.org/Organization">
  		<div class="map__title" itemprop="name"><?=$text['map']['title']?></div>
  		<span class="map__text" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
  			<span itemprop="addressLocality"><?=$text['map']['address']?></span>
  			<span itemprop="streetAddress"><?=$text['map']['street']?></span>
			</span>
			<span class="map__contant">
				<span itemprop="telephone"><?=$text['map']['phone']?></span>, <span itemprop="email"><?=$text['map']['email']?></span>
			</span>
  	</div>
    <div id="map"></div>
  </div>