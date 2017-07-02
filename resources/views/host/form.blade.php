@extends('layouts.sysinfo')


@section('content')
<section class="hosts" style="margin-top:40px;" id="hosts">
<div class="container">
	{{-- @include('host.header') --}}

	<h1 class="title">Add Host @{{ ipaddress }}</h1>
	<h2 class="subtitle">Enter to details to add a new host</h2>

	{!! Form::model($host, []) !!}

	<div class="field is-horizontal">
	  <div class="field-label is-normal">
	    <label class="label">Host Site</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-narrow">
	      <div class="control">
	        <div class="select is-fullwidth">
	        	{!! Form::select('site_id', $sites, $host->site_id, []) !!}
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="field is-horizontal has-addons">
	 	<div class="field-label is-normal">
		    <label class="label">Host IP </label>
		  </div>
		  	  <div class="field-body">

	  <p class="control">
	    <input  v-model="ipaddress"  name="ipaddress" class="input" type="text" placeholder="127.x.x.1">
	  </p>
	  <p class="control">
	    <a  v-on:click="fetchHost" class="button">
	      Fetch
	    </a>
	  </p>

	  </div>
	</div>










	<div class="field is-horizontal">
	  <div class="field-label is-normal">
	    <label class="label">Hostname</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('os_hostname', $host->os_hostname, ['v-model' => 'os_hostname', 'class' => 'input']) !!}
	      </p>
	    </div>
	  </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Distro</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('os_distro', $host->os_distro, ['v-model' => 'os_distro', 'class' => 'input', 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Release</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('os_release', $host->os_release, ['v-model' => 'os_release', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>


	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Architechture</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('os_arch', $host->os_arch, ['v-model' => 'os_arch', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Logofile</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('os_logofile', $host->os_logofile, ['v-model' => 'os_logofile', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Manufacturer</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('cpu_manufacturer', $host->cpu_manufacturer, ['v-model' => 'cpu_manufacturer', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Brand</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('cpu_brand', $host->cpu_brand, ['v-model' => 'cpu_brand', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Speed</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('cpu_speed', $host->cpu_speed, ['v-model' => 'cpu_speed', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>

	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">Core</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('cpu_cores', $host->cpu_cores, ['v-model' => 'cpu_cores', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>



	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">System Manufacturer</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('s_manufacturer', $host->s_manufacturer, ['v-model' => 's_manufacturer', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>


	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">System Model</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('s_model', $host->s_model, ['v-model' => 's_model', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>


	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">System UUID</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('s_uuid', $host->s_uuid, ['v-model' => 's_uuid', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>


	<div class="field is-horizontal">
	 <div class="field-label is-normal">
	    <label class="label">System Serial</label>
	  </div>
	  <div class="field-body">
	    <div class="field is-grouped">
	      <p class="control is-expanded">
	      	{!! Form::text('s_serial', $host->s_serial, ['v-model' => 's_serial', 'class' => 'input' , 'readyonly' => 'readonly']) !!}
	      </p>
	    </div>
	    </div>
	</div>



	<div class="field is-grouped">
	  <p class="control">
	    <button class="button is-primary">Submit</button>
	  </p>

	</div>

	{!! Form::close() !!}






</div>
</section>


@stop


@push('scripts')
<script type="text/javascript">


 var app = new Vue({
 	el:'#hosts',
 	data:{
 		ipaddress: '',
 		os_hostname: '',
		os_distro: '',
		os_release: '',
		os_arch: '',
		os_logofile: '',
		cpu_manufacturer: '',
		cpu_brand: '',
		cpu_brand: '',
		cpu_speed: '',
		cpu_cores: '',
		s_manufacturer: '',
		s_model: '',
		s_serial: '',
		s_uuid: '' 	},
 	methods:{
 		fetchHost:function(){

 			let app = this;
 			axios.get('http://' + this.ipaddress + ':4321/api')
			  .then(function (response) {
			    console.log(response);
			    // app.ipaddress = response.data.hostname;
			    app.os_hostname = response.data.os_hostname;
				app.os_distro = response.data.os_distro;
				app.os_release = response.data.os_release;
				app.os_arch = response.data.os_arch;
				app.os_logofile = response.data.os_logofile;
				app.cpu_manufacturer = response.data.cpu_manufacturer;
				app.cpu_brand = response.data.cpu_brand;
				app.cpu_brand = response.data.cpu_brand;
				app.cpu_speed = response.data.cpu_speed;
				app.cpu_cores = response.data.cpu_cores;
				app.s_manufacturer = response.data.s_manufacturer;
				app.s_model = response.data.s_model;
				app.s_serial = response.data.s_serial;
				app.s_uuid = response.data.s_uuid;

			  })
			  .catch(function (error) {
			    console.log(error);
			  });

 		}
 	}

 })


</script>





@endpush