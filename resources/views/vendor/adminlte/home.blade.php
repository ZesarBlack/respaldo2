@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<!-- Default box -->
				<div class="box  box-solid box-info">
					<div class="box-header with-border">
						<h3 class="box-title">información general de los issues</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-aqua">
								<div class="inner">
									<h3>{{ $issues2 }}</h3>
									<h4>todos los issues</h4>
								</div>
								<div class="icon">
									<i class="fa fa-folder-open"></i>
								</div>
								<a href="#" class="small-box-footer">
									Ver informacion <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>


						<div class="col-lg-3 col-xs-6">
							<!-- small box -->
							<div class="small-box bg-green">
								<div class="inner">
									<h3>{{ $issues1 }}</h3>

									<p>Issues de urgencia</p>
								</div>
								<div class="icon">
									<i class="fa  fa-hourglass-o"></i>
								</div>
								<a href="#" class="small-box-footer">
									Ver informacion <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
		          <!-- small box -->
		          <div class="small-box bg-yellow">
		            <div class="inner">
		              <h3>{{$issues}}</h3>

		              <p>Issues de alto impacto</p>
		            </div>
		            <div class="icon">
		              <i class="fa  fa-line-chart"></i>
		            </div>
		            <a href="#" class="small-box-footer">
		              Ver informacion <i class="fa fa-arrow-circle-right"></i>
		            </a>
		          </div>
		        </div>
		        <!-- ./col -->
						<div class="col-lg-3 col-xs-6">
		          <!-- small box -->
		          <div class="small-box bg-red">
		            <div class="inner">
		              <h3>{{ $issues3 }}</h3>

		              <p>Issues primordiales</p>
		            </div>
		            <div class="icon">
		              <i class="fa fa-warning"></i>
		            </div>
		            <a href="#" class="small-box-footer">
		              Ver informacion <i class="fa fa-arrow-circle-right"></i>
		            </a>
		          </div>
		        </div>
		        <!-- ./col -->
					</div>
				</div>
		</div>
	</div>
@endsection
