<div class="side-widgets">
	<div class="widgets-content">
		
		<div class="school-chooser">
			<div class="widget-header">
				<h2>School Chooser</h2>
			</div>
			<div class="widget-content">
				<div class="form-group">
					<select class="form-control input-sm">
						<option value="none">School</option>
					</select>
				</div>
			</div>
			
			
		</div>
		
		<div class="calendar-container text-xs-center" >
			<div id="calendar2" class="fc-header-title"></div>
		</div>

		<div class="news-feed">
			<div class="widget-header">
				<h2>{{ Lang::get(\Session::get('lang').'.feed') }}</h2>
			</div>
			<div class="widget-content feed-content">
				<ul class="feed">
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li1') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li2') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li3') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
					<li>
						<a href="javascript:void(0)">{{ Lang::get(\Session::get('lang').'.li4') }}</a> <span class="feed-date">25/4/2015</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
