@extends ('_master') 

@section ('title')
	Add Clothes
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/add-clothes.css') }}">
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p class="lead">Tactical Algorithmic Laundry Organizing Servant</p>
			<p>Enter information about the piece of clothing</p>
		</div>
    </div>
 	<div class="separator">
 		<div class="separator-text col-md-6 col-md-offset-1">Add Clothes</div>
 	</div>   	
@stop

@section ('content')
	<div class="col-md-8 col-md-offset-2 well">
		{{ Form::open(array('url' => '/sign-up', 'method' => 'POST', 'name' => 'login', 'class' => 'form-horizontal')) }}
			<fieldset>
				<legend>New Item</legend>
				<div class="form-group">
					{{ Form::label('name', 'Name', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-4">
						{{ Form::text('name', 'Name', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('washingInstructions', 'Washing Instructions', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwNormal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Normal
							</label>
							<img src="images/mwNORMAL.jpg" class="laundry-symbol">								
						</div>					
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwCold') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Cold
							</label>
							<div class="laundry-symbol">
								<img src="images/mwCOLD.jpg">
								<img src="images/mw30c.jpg">
							</div>								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwWarm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Warm
							</label>
							<div class="laundry-symbol">
								<img src="images/mwWARM.jpg">
								<img src="images/mw40c.jpg">
							</div>																	
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwHot') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Hot
							</label>
							<div class="laundry-symbol">
								<img src="images/mwHOT.jpg">
								<img src="images/mw50c.jpg">
							</div>																
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwColdPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Cold, Permanent Press
							</label>
							<img src="images/mwCOLDpp.jpg" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwWarmPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Warm, Permanent Press
							</label>
							<img src="images/mwWARMpp.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwHotPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Hot, Permanent Press
							</label>
							<img src="images/mwHOTpp.jpg" class="laundry-symbol">								
						</div>																																			
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('dryingInstructions', 'Drying Instructions', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNormal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Normal
							</label>
							<img src="images/tdNormal.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, No Heat
							</label>
							<img src="images/tdNoHeat.jpg" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Low Heat
							</label>
							<img src="images/tdLowHeat.jpg" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMedium') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Medium
							</label>
							<img src="images/tdMedium.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdHigh') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, High
							</label>
							<img src="images/tdHigh.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeatPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, No Heat
							</label>
							<img src="images/tdNoHeatpp.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeatPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, Low Heat
							</label>
							<img src="images/tdLowHeatpp.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMediumPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, Medium
							</label>
							<img src="images/tdMediumpp.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeatGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, No Heat
							</label>
							<img src="images/tdNoHeatGentle.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeatGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, Low Heat
							</label>
							<img src="images/tdLowHeatGentle.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMediumGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, Medium
							</label>
							<img src="images/tdMediumGentle.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'lineDry') }}
								<span class="circle"></span>
								<span class="check"></span>
								Line Dry
							</label>
							<img src="images/LineDry.jpg" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'dripDry') }}
								<span class="circle"></span>
								<span class="check"></span>
								Drip Dry
							</label>
							<img src="images/DripDry.jpg" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'dryFlat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Dry Flat
							</label>
							<img src="images/DryFlat.jpg" class="laundry-symbol">								
						</div>																																																																																														
					</div>															
				</div>
				<div class="form-group">
					{{ Form::label('color', 'Color', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'red') }}
								<span class="circle"></span>
								<span class="check"></span>
								Red
							</label>
							<img src="images/item_colors/red.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'pink') }}
								<span class="circle"></span>
								<span class="check"></span>
								Pink
							</label>
							<img src="images/item_colors/pink.png" class="color">								
						</div>		
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'purple') }}
								<span class="circle"></span>
								<span class="check"></span>
								Purple
							</label>
							<img src="images/item_colors/purple.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'deepPurple') }}
								<span class="circle"></span>
								<span class="check"></span>
								Deep Purple
							</label>
							<img src="images/item_colors/deeppurple.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'indigo') }}
								<span class="circle"></span>
								<span class="check"></span>
								Indigo 
							</label>
							<img src="images/item_colors/indigo.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'blue') }}
								<span class="circle"></span>
								<span class="check"></span>
								Blue 
							</label>
							<img src="images/item_colors/blue.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'lightBlue') }}
								<span class="circle"></span>
								<span class="check"></span>
								Light Blue 
							</label>
							<img src="images/item_colors/lightblue.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'cyan') }}
								<span class="circle"></span>
								<span class="check"></span>
								Cyan 
							</label>
							<img src="images/item_colors/cyan.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'teal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Teal 
							</label>
							<img src="images/item_colors/teal.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'green') }}
								<span class="circle"></span>
								<span class="check"></span>
								Green 
							</label>
							<img src="images/item_colors/green.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'lightGreen') }}
								<span class="circle"></span>
								<span class="check"></span>
								Light Green 
							</label>
							<img src="images/item_colors/lightgreen.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'lime') }}
								<span class="circle"></span>
								<span class="check"></span>
								Lime  
							</label>
							<img src="images/item_colors/lime.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'yellow') }}
								<span class="circle"></span>
								<span class="check"></span>
								Yellow  
							</label>
							<img src="images/item_colors/yellow.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'amber') }}
								<span class="circle"></span>
								<span class="check"></span>
								Amber  
							</label>
							<img src="images/item_colors/amber.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'orange') }}
								<span class="circle"></span>
								<span class="check"></span>
								Orange  
							</label>
							<img src="images/item_colors/orange.png" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'deepOrange') }}
								<span class="circle"></span>
								<span class="check"></span>
								Deep Orange  
							</label>
							<img src="images/item_colors/deeporange.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'brown') }}
								<span class="circle"></span>
								<span class="check"></span>
								Brown  
							</label>
							<img src="images/item_colors/brown.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'blueGrey') }}
								<span class="circle"></span>
								<span class="check"></span>
								Blue Grey  
							</label>
							<img src="images/item_colors/bluegrey.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'black') }}
								<span class="circle"></span>
								<span class="check"></span>
								Black  
							</label>
							<img src="images/item_colors/black.png" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'white') }}
								<span class="circle"></span>
								<span class="check"></span>
								White  
							</label>
							<img src="images/item_colors/white.png" class="color">								
						</div>																																																																																																																																																																								
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						{{ Form::submit('SUBMIT', array('class' => 'btn btn-primary')) }}						
					</div>
				</div>
			</fieldset>
		{{ Form::close() }}
	</div>
@stop