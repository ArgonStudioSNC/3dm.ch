/*
    Defines the API route we are using.
*/
var api_url = '';

switch( process.env.NODE_ENV ){
  case 'development':
    api_url = 'http://rendersurfer.lvh.me:8000/api/v1';
  break;
  case 'production':
    api_url = 'https://rendersurfer.3dm.ch/api/v1';
  break;
}

export const RENDERSURFER_CONFIG = {
  API_URL: api_url,
}
