<div class="row">
<div class="col-xl-12 gallery-container">
	<button class="accordion"><b>Dostępne obrazki</b></button>
	<div class="panel">
	
		<div class="row gallery-row">
		
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img1.jpg" alt="Obrazek nr 1" name="1" width=150/>
				<figcaption class="gallery-fig">Obrazek 1</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img2.jpg" alt="Obrazek nr 2" name="2" width=150/>
				<figcaption class="gallery-fig">Obrazek 2</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img3.jpg" alt="Obrazek nr 3" name="3" width=150/>
				<figcaption class="gallery-fig">Obrazek 3</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img4.jpg" alt="Obrazek nr 4" name="4" width=150/>
				<figcaption class="gallery-fig">Obrazek 4</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img5.jpg" alt="Obrazek nr 5" name="5" width=150/>
				<figcaption class="gallery-fig">Obrazek 5</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img6.jpg" alt="Obrazek nr 6" name="6" width=150/>
				<figcaption class="gallery-fig">Obrazek 6</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img7.jpg" alt="Obrazek nr 7" name="7" width=150/>
				<figcaption class="gallery-fig">Obrazek 7</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img8.jpg" alt="Obrazek nr 8" name="8" width=150/>
				<figcaption class="gallery-fig">Obrazek 8</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img9.jpg" alt="Obrazek nr 9" name="9" width=150/>
				<figcaption class="gallery-fig">Obrazek 9</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img10.jpg" alt="Obrazek nr 10" name="10" width=150/>
				<figcaption class="gallery-fig">Obrazek 10</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img11.jpg" alt="Obrazek nr 11" name="11" width=150/>
				<figcaption class="gallery-fig">Obrazek 11</figcaption>
			</div>
			
			<div class="col-lg-2 col-md-3 col-sm-4 col-6 gallery-img">
				<img src="/web-img/300x300/img12.jpg" alt="Obrazek nr 12" name="12" width=150/>
				<figcaption class="gallery-fig">Obrazek 12</figcaption>
			</div>
		
		
		</div>
		
	</div>
</div>
</div>

<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}
</script>
	