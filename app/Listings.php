<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class Listings extends Model {
	protected $fillable = [
		'title',
		'type',
		'postedBy',
		'longitude',
		'latitude',
		'phone',
		'region',
		'street',
		'homesize',
		'pincode',
		'price',
		'availability',
		'hometype',
		'info',
		'architecturalmodel',
		'yearbuilt',
		'yearmodified',
		'lottype',
		'stories',
		'forclosure',
		'otherrentdetail',
		'videolink',
		'beds',
		'bathrooms',
		'opendate',
		'starttime',
		'endtime',
		'office',
		'dinning',
		'family',
		'living',
		'guest',
		'kitchen',
		'cabelTv',
		'fans',
		'internet',
		'securitysys',
		'wifi',
		'balcony',
		'pool',
		'lawn',
		'garden',
		'fence',
		'gym',
		'floortye',
		'aircondition',
		'heater',
		'naturalAir',
		'garagetype',
		'buildingview',
		'status',
	];
	
	public function imagedata() {
		return $this->hasMany(Images::class, 'listID', 'id');
	}
}
