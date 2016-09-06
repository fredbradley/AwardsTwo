@extends('judge.layouts.dashboard')

@section('section')
	<div class="card">
		<div class="card-block">
			<div class="invoice">
				<div class="row">
					<div class="col-md-6">
						<a href="javascript:void(0)"><span class="text text-muted">&nbsp;Ani Theme</span></a>
					</div>
					<div class="col-md-6 text-xs-right">
						<p class="text-dark">
							#1233219 / 01 Jan 2014  <br><small class="text-light"> Lorem ipsum dolor sit amet </small>
						</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">
						<h4>Client:</h4>
						<div class="card">
							<div class="card-header card-default">
								<address>
									<strong class="text-dark">Customer Company, Inc.</strong>
									<br>
									1 Infinite Loop
									<br>
									Cupertino, CA 95014
									<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
								<address>
									<strong class="text-dark">E-mail:</strong>
									<a href="mailto:#">
										info@customer.com
									</a>
								</address>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4 pull-right payment-detals-wrap">
						<h4>Payment Details:</h4>
						<ul class="list-unstyled invoice-details">
							<li>
								<strong>V.A.T Reg #:</strong> 233243444
							</li>
							<li>
								<strong>Account Name:</strong> Company Ltd
							</li>
							<li>
								<strong>SWIFT code:</strong> 1233F4343ABCDEW
							</li>
							<li>
								<strong>DATE:</strong> 01/01/2014
							</li>
							<li>
								<strong>DUE:</strong> 11/02/2014
							</li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th> # </th>
									<th> Item </th>
									<th class="hidden-480"> Description </th>
									<th class="hidden-480"> Quantity </th>
									<th class="hidden-480"> Unit Cost </th>
									<th> Total </th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td> 1 </td>
									<td> Lorem </td>
									<td class="hidden-480"> Drem psum dolor </td>
									<td class="hidden-480"> 12 </td>
									<td class="hidden-480"> $35 </td>
									<td> $1152 </td>
								</tr>
								<tr>
									<td> 2 </td>
									<td> Ipsum </td>
									<td class="hidden-480"> Consectetuer adipiscing elit </td>
									<td class="hidden-480"> 21 </td>
									<td class="hidden-480"> $469 </td>
									<td> $6159 </td>
								</tr>
								<tr>
									<td> 3 </td>
									<td> Dolor </td>
									<td class="hidden-480"> Olor sit amet adipiscing eli </td>
									<td class="hidden-480"> 24 </td>
									<td class="hidden-480"> $144 </td>
									<td> $8270 </td>
								</tr>
								<tr>
									<td> 4 </td>
									<td> Sit </td>
									<td class="hidden-480"> Laoreet dolore magna </td>
									<td class="hidden-480"> 194 </td>
									<td class="hidden-480"> $317 </td>
									<td> $966 </td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 invoice-block">
						<ul class="list-unstyled amounts text-small" align="right">
							<li>
								<strong>Sub-Total:</strong> $12,876
							</li>
							<li>
								<strong>Discount:</strong> 9.9%
							</li>
							<li>
								<strong>VAT:</strong> 22%
							</li>
							<li class="text-extra-large">
								<strong>Total:</strong> $11,400
							</li>
						</ul>
						<br>
						<a class="btn btn-rounded btn-primary btn-o hidden-print pull-right">
							Submit Your Invoice <i class="fa fa-check"></i>
						</a> &nbsp;&nbsp;&nbsp;
						<a onclick="javascript:window.print();" class="btn btn-bordered btn-primary hidden-print pull-right">
							Print <i class="fa fa-print"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop