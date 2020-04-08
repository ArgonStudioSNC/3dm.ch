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
        GET     /api/v1/renders
    */
    all: function(){
        return client.get(`renders`);
    },

    /*
        GET     /api/v1/renders/{id}
    */
    find: function(id){
        return client.get(`renders/${id}`);
    },

    /*
        GET     /api/v1/renders/p/{filename}
    */
    picture: function(filename, size = 'original'){
        return client.get(`renders/p/${size}/${filename}`, { responseType: 'blob', });
    },

    /*
        POST    /api/v1/renders
    */
    create: function(name, filename){
        return client.post(`renders`,
            {
                name: name,
                filename: filename
            }
        );
    }
}
