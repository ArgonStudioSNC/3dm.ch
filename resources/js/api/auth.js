import axios from 'axios';

/*
    Imports the RENDERSURFER API URL from the config.
*/
import { RENDERSURFER_CONFIG } from '../config.js';

const client = axios.create({
    baseURL: RENDERSURFER_CONFIG.API_URL,
});

export default {
    /*
        GET     /api/v1/permissions
    */
    permissions: function(){
        return client.get(`permissions`);
    },

    /*
        GET     /api/v1/roles
    */
    roles: function(name){
        return client.get(`roles`);
    }

}
