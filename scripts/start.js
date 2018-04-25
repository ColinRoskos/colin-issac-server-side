


function addRightCol(){
	$('.widget').append(`</br><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tv-medium-widget"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a></span> <span class="blue-text">Quotes</span> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "container_id": "tv-medium-widget",
  "symbols": [
    [
      "Apple",
      "AAPL "
    ]
  ],
  "greyText": "Quotes by",
  "gridLineColor": "#e9e9ea",
  "fontColor": "#83888D",
  "underLineColor": "#dbeffb",
  "trendLineColor": "#4bafe9",
  "width": "100%",
  "height": "50%",
  "locale": "en"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->`);


$('.widget').prepend(`<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tv-medium-widget"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text"><a href="https://www.tradingview.com/symbols/GOOGL/" rel="noopener" target="_blank"><span class="blue-text">Google</span></a></span> <span class="blue-text">Quotes</span></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "container_id": "tv-medium-widget",
  "symbols": [
    [
      "Google",
      "GOOGL"
    ]
  ],
  "greyText": "Quotes by",
  "gridLineColor": "#e9e9ea",
  "fontColor": "#83888D",
  "underLineColor": "#dbeffb",
  "trendLineColor": "#4bafe9",
  "width": "100%",
  "height": "50%",
  "locale": "en"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->`);

$('.tv-widget-chart__header a').css('background-color', 'black');
}



function start(){
		addRightCol();

}


$( document ).ready(function() {
    start();
});
