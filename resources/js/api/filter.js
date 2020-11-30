import axios from 'axios';

/*
    Imports the RENDERSURFER API URL from the config.
*/
import { RENDERSURFER_CONFIG } from '@js/config.js';

const client = axios.create({
    baseURL: RENDERSURFER_CONFIG.API_URL,
});

export default {
    /*
        GET     /api/v1/filters
    */
    index: function(){
        return client.get(`filters`);
    },

    /*
        GET     /api/v1/filters/{name}
    */
    find: function(name){
        return client.get(`filters/${name}`);
    }

}
