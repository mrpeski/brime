<?php 

namespace App\ViewComposers;

use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

use \Cmfcmf\OpenWeatherMap\Util\Weather;
use App\Discovery\OWM\FileCache;

use Illuminate\Contracts\View\View;

class WeatherComposer 
{

	protected $details;
	protected $icon_url;
	protected $city;
	protected $temp;

	public function __construct()
	{
		$appid = env('OPEN_WEATHER_KEY');
		$units = 'metric';
		$cache = new FileCache();
		$owm = new OpenWeatherMap($appid, null, $cache, 600);
		
		try {
		    $weather = $owm->getRawWeatherData(2348773, $units, 'en', $appid, $mode = 'json');
		} catch(OWMException $e) {
		    echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
		} catch(\Exception $e) {
		    echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
		}

		$data = json_decode($weather);
		if(! $data == null) {
		$this->city = $data->name;

		$this->temp = $data->main->temp;

		$details = $data->weather[0];

		$this->details = $details;
		$this->icon();
		}
	}


	public function compose(View $view) {
		$view->with('weather', $this->details);
		$view->with('icon_url', $this->icon_url);
		$view->with('city', $this->city);
		$view->with('temp', $this->temp);
	}
	
	protected function icon() {
		$we = new Weather( $this->details->id, $this->details->description, $this->details->icon );
		$this->icon_url = $we->getIconUrl();
	}
}