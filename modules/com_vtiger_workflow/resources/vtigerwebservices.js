function vtigerwebservicesproto() {
	var $ = jQuery;
	function md5(str) {
		return hex_md5(str);
	}

	function mergeObjects(obj1, obj2) {
		var res = {};
		for (var k in obj1) {
			res[k] = obj1[k];
		}
		for (k in obj2) {
			res[k] = obj2[k];
		}
		return res;
	}

	function doGet(params, callback) {
		$.get(this.serviceUrl, params, function (result) {
			if (typeof(result)=='string') {
				var parsed = JSON.parse(result);
			} else {
				var parsed = result;
			}
			callback(parsed);
		});
	}

	function doPost(params, callback) {
		$.post(this.serviceUrl, params, function (result) {
			if (typeof(result)=='string') {
				var parsed = JSON.parse(result);
			} else {
				var parsed = result;
			}
			callback(parsed);
		});
	}

	function get(operation, parameters, callback) {
		this.doGet(mergeObjects(parameters, {'operation':operation, 'sessionName':this.sessionId}), function (response) {
			if (response['success']) {
				callback(true, response['result']);
			} else {
				callback(false, response['error']);
			}
		});
	}

	function post(operation, parameters, callback) {
		this.doPost(mergeObjects(parameters, {'operation':operation, 'sessionName':this.sessionId}), function (response) {
			if (response['success']) {
				callback(true, response['result']);
			} else {
				callback(false, response['error']);
			}
		});
	}

	function login(callback) {
		var self = this;
		this.doGet({operation:'getchallenge', username:this.username}, function (response) {
			if (response['success']) {
				var token = response['result']['token'];
				var encodedKey = md5(token+self.accessKey);
				self.doPost({operation:'login', username: self.username, accessKey: encodedKey}, function (response) {
					if (response['success']) {
						self.sessionId = response['result']['sessionName'];
						self.userId = response['result']['userId'];
						callback(true);
					} else {
						callback(false, response['error']);
					}
				});
			} else {
				callback(false, response['error']);
			}
		});
	}

	function logout(callback) {
		this.post('logout', {}, callback);
	}

	function listTypes(callback) {
		this.get('listtypes', {}, function (status, result) {
			if (status) {
				callback(true, result['types']);
			} else {
				callback(false, result);
			}
		});
	}

	function describeObject(name, callback) {
		this.get('describe', {'elementType':name}, callback);
	}

	function create(object, objectType, callback) {
		if (object['assigned_user_id']==null) {
			object['assigned_user_id'] = this.userId;
		}
		var objectJson = JSON.stringify(object);
		this.post('create', {'elementType':objectType, 'element':objectJson}, callback);
	}

	function retrieve(id, callback) {
		this.get('retrieve', {'id':id}, callback);
	}

	function update(object, callback) {
		var objectJson = JSON.stringify(object);
		this.post('update', {'element':objectJson}, callback);
	}

	function deleteObject(id, callback) {
		this.post('delete', {'id':id}, callback);
	}

	function query(query, callback) {
		this.get('query', {'query':query}, callback);
	}

	function extendSession(callback) {
		var self = this;
		this.doPost({operation: 'extendsession'}, function (response) {
			var status = response['success'];
			var result = response['result'];
			if (status) {
				self.sessionId = result['sessionName'];
				self.userId = result['userId'];
				callback(true, result);
			} else {
				callback(false, result);
			}
		});
	}

	return {
		doPost:doPost, doGet:doGet,
		get:get, post:post,
		login:login, logout:logout,
		listTypes:listTypes, describeObject:describeObject,
		create:create, retrieve:retrieve, update:update, deleteObject:deleteObject,
		query:query, extendSession: extendSession
	};
}

function VtigerWebservices(serviceUrl, username, accessKey) {
	this.serviceUrl = serviceUrl;
	this.username = username;
	this.accessKey = accessKey;
}
VtigerWebservices.prototype = vtigerwebservicesproto();
