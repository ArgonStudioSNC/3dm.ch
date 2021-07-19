import axios from 'axios';

/*
    Imports the RENDERSURFER API URL from the config.
*/
import { RENDERSURFER_CONFIG } from '@js/rendersurfer/config.js';

const client = axios.create({
    baseURL: RENDERSURFER_CONFIG.API_URL,
});

export default {
    /*
        GET     /api/v1/renders
    */
    index: function(){
        return client.get(`renders`);
    },

    /*
        GET     /api/v1/renders/{id}
    */
    show: function(id){
        return client.get(`renders/${id}`);
    },

    /*
        GET     /api/v1/renders/p/{filename}
    */
    picture: function(filename, size = 'large'){
        return client.get(`renders/p/${size}/${filename}`, { responseType: 'blob', });
    },

    /*
        POST    /api/v1/renders
    */
    store: function(data){
        return client.post(`renders`, data);
    },

    /*
        PUT    /api/v1/renders/{id}
    */
    update: function(id, data){
        data.append("_method", "PUT");
        return client.post(`renders/${id}`, data);
    },

    /*
        DELETE    /api/v1/renders/{id}
    */
    delete: function(id){
        return client.delete(`renders/${id}`);
    }
}
