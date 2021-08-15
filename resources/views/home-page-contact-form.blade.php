							<div class="alert alert-success @if( request()->isMethod( 'POST' ) && request( 'form_id' ) === 'homePageContactForm' ) d-block @else d-none @endif" role="alert">
								Your message has been sent. Thank you.
							</div>

							<form id="homePageContactForm" class="php-email-form @if( request()->isMethod( 'POST' ) && request( 'form_id' ) === 'homePageContactForm' ) d-none @else d-block @endif" action="/" method="post" role="form">
								@csrf

								<input type="hidden" name="form_id" id="form_id" value="homePageContactForm">
								<div class="row">
									<div class="col-md-6 form-group">
										<input type="text" name="home_page_contact_form_name" class="form-control @error( 'home_page_contact_form_name' ) is-invalid @enderror" id="home_page_contact_form_name" placeholder="Name" maxlength="30" value="{{ old( 'home_page_contact_form_name' ) }}">

										<span class="invalid-feedback font-weight-bold @error( 'home_page_contact_form_name' ) d-inline @enderror" role="alert">
											{{ $errors->get( 'home_page_contact_form_name' )[ 0 ] ?? '' }}
										</span>
									</div>
									<div class="col-md-6 form-group mt-3 mt-md-0">
										<input type="text" name="home_page_contact_form_email" class="form-control @error( 'home_page_contact_form_email' ) is-invalid @enderror" id="home_page_contact_form_email" placeholder="Email" maxlength="50" value="{{ old( 'home_page_contact_form_email' ) }}">

										<span class="invalid-feedback font-weight-bold @error( 'home_page_contact_form_email' ) d-inline @enderror" role="alert">
											{{ $errors->get( 'home_page_contact_form_email' )[ 0 ] ?? '' }}
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 form-group mt-3">
										<input type="text" name="home_page_contact_form_phone" class="form-control @error( 'home_page_contact_form_phone' ) is-invalid @enderror" id="home_page_contact_form_phone" placeholder="Phone" maxlength="20" data-mask="(000) 000-0000" value="{{ old( 'home_page_contact_form_phone' ) }}"><?php // Added: 08/14/2021. ?>

										<span class="invalid-feedback font-weight-bold @error( 'home_page_contact_form_phone' ) d-inline @enderror" role="alert">
											{{ $errors->get( 'home_page_contact_form_phone' )[ 0 ] ?? '' }}
										</span>
									</div>
									<div class="col-md-6 form-group mt-3">
										<input type="text" name="home_page_contact_form_subject" class="form-control @error( 'home_page_contact_form_subject' ) is-invalid @enderror" id="home_page_contact_form_subject" placeholder="Subject" maxlength="80" value="{{ old( 'home_page_contact_form_subject' ) }}">

										<span class="invalid-feedback font-weight-bold @error( 'home_page_contact_form_subject' ) d-inline @enderror" role="alert">
											{{ $errors->get( 'home_page_contact_form_subject' )[ 0 ] ?? '' }}
										</span>
									</div>
								</div>
								<div class="row">
									<div class="form-group mt-3">
										<textarea name="home_page_contact_form_message" class="form-control @error( 'home_page_contact_form_message' ) is-invalid @enderror" rows="5" maxlength="500" placeholder="Message">{{ old( 'home_page_contact_form_message' ) }}</textarea>

										<span class="invalid-feedback font-weight-bold @error( 'home_page_contact_form_message' ) d-inline @enderror" role="alert">
											{{ $errors->get( 'home_page_contact_form_message' )[ 0 ] ?? '' }}
										</span>
									</div>
								</div>
								<div class="text-center">
									<button type="submit">Send Message</button>
								</div>
							</form>
