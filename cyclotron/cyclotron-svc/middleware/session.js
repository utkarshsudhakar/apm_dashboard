/*
 * Copyright (c) 2013-2015 the original author or authors.
 *
 * Licensed under the MIT License (the "License");
 * you may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at
 *
 *     http://www.opensource.org/licenses/mit-license.php
 *
 * Unless required by applicable law or agreed to in writing, 
 * software distributed under the License is distributed on an 
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, 
 * either express or implied. See the License for the specific 
 * language governing permissions and limitations under the License. 
 */ 
 
/* Session middleware
 * 
 * If `session` is provided in the query string, the session key will be used to
 * load a Session object from the database.  The Session will be attached to the 
 * request.
 * 
 * If an invalid session key is provided, error 401 will be returned.
 */
var auth = require('../routes/auth.js');

exports.sessionLoader = function(req, res, next) {
    /* If ?session= provided, attempt to load it into req.session and req.user */
    if (req.query.session != undefined) {
        auth.validateSession(req.query.session)
        .then(function (session) {
            req.session = session;
            req.user = session.user;
            next();
        })
        .catch(function () {
            res.status(401).send('Authentication failed: session key provided but not valid.');
        })
    } else {
        next();
    }
};
