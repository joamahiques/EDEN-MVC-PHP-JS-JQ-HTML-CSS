<div id="contenido" class="content">
    <div class="container_12">
        <div class="flex3">
            <div class="contact">
                    <h2>Donde estamos:</h2>
                    <div id="map"></div>
            </div>
            <div class="contact">
					<h2>Contacto:</h2>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="phone">
							<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						
                    </form>
                    <label class="contactbtn">
								<a href="#" data-type="reset" class="btn">BORRAR</a>
								<a href="#" data-type="submit" class="btn">ENVIAR</a>
</label>    
            </div><!--div formulario -->
            
            </div><!--flex -->
        </div><!--container12 -->
 </div> <!--primer -->