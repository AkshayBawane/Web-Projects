WEBVR.checkAvailability().catch( function( message ) {

				document.body.appendChild( WEBVR.getMessageContainer( message ) );

			} );

			//

			var renderer = new THREE.WebGLRenderer( { antialias: true } );
			renderer.setClearColor( 0xf0f0ff );
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );

			renderer.vr.enabled = true;

			var scene = new THREE.Scene();

			var light = new THREE.HemisphereLight( 0xfff0f0, 0x606066 );
			light.position.set( 1, 1, 1 );
			scene.add( light );

			var train = new THREE.Object3D();
			scene.add( train );

			var camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 0.1, 500 );
			train.add( camera );

			// environment

			var geometry = new THREE.PlaneBufferGeometry( 500, 500, 15, 15 );
			geometry.applyMatrix( new THREE.Matrix4().makeRotationX( - Math.PI / 2 ) );

			var positions = geometry.attributes.position.array;
			var vertex = new THREE.Vector3();

			for ( var i = 0; i < positions.length; i += 3 ) {

				vertex.fromArray( positions, i );

				vertex.x += Math.random() * 10 - 5;
				vertex.z += Math.random() * 10 - 5;

				var distance = ( vertex.distanceTo( scene.position ) / 5 ) - 25;
				vertex.y = Math.random() * Math.max( 0, distance );

				vertex.toArray( positions, i );

			}

			geometry.computeVertexNormals();

			var material = new THREE.MeshLambertMaterial( {
				color: 0x407000
			} );

			var mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			var geometry = new TreesGeometry( mesh );
			var material = new THREE.MeshBasicMaterial( {
				side: THREE.DoubleSide, vertexColors: THREE.VertexColors
			} );
			var mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			var geometry = new SkyGeometry();
			var material = new THREE.MeshBasicMaterial( { color: 0xffffff } );
			var mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			//

			var PI2 = Math.PI * 2;

			var curve = ( function () {

				var vector = new THREE.Vector3();
				var vector2 = new THREE.Vector3();

				return {

					getPointAt: function ( t ) {

						t = t * PI2;

						var x = Math.sin( t * 3 ) * Math.cos( t * 4 ) * 50;
						var y = Math.sin( t * 10 ) * 2 + Math.cos( t * 17 ) * 2 + 5;
						var z = Math.sin( t ) * Math.sin( t * 4 ) * 50;

						return vector.set( x, y, z ).multiplyScalar( 2 );

					},

					getTangentAt: function ( t ) {

						var delta = 0.0001;
						var t1 = Math.max( 0, t - delta );
						var t2 = Math.min( 1, t + delta );

						return vector2.copy( this.getPointAt ( t2 ) )
							.sub( this.getPointAt( t1 ) ).normalize();

					}

				};

			} )();

			var geometry = new RollerCoasterGeometry( curve, 1500 );
			var material = new THREE.MeshPhongMaterial( {
				vertexColors: THREE.VertexColors
			} );
			var mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			var geometry = new RollerCoasterLiftersGeometry( curve, 100 );
			var material = new THREE.MeshPhongMaterial();
			var mesh = new THREE.Mesh( geometry, material );
			mesh.position.y = 0.1;
			scene.add( mesh );

			var geometry = new RollerCoasterShadowGeometry( curve, 500 );
			var material = new THREE.MeshBasicMaterial( {
				color: 0x305000, depthWrite: false, transparent: true
			} );
			var mesh = new THREE.Mesh( geometry, material );
			mesh.position.y = 0.1;
			scene.add( mesh );

			var funfairs = [];

			//

			var geometry = new THREE.CylinderBufferGeometry( 10, 10, 5, 15 );
			var material = new THREE.MeshLambertMaterial( {
				color: 0xff8080, shading: THREE.FlatShading
			} );
			var mesh = new THREE.Mesh( geometry, material );
			mesh.position.set( - 80, 10, - 70 );
			mesh.rotation.x = Math.PI / 2;
			scene.add( mesh );

			funfairs.push( mesh );

			var geometry = new THREE.CylinderBufferGeometry( 5, 6, 4, 10 );
			var material = new THREE.MeshLambertMaterial( {
				color: 0x8080ff, shading: THREE.FlatShading
			} );
			var mesh = new THREE.Mesh( geometry, material );
			mesh.position.set( 50, 2, 30 );
			scene.add( mesh );

			funfairs.push( mesh );

			//

			WEBVR.getVRDisplay( function ( display ) {

				renderer.vr.setDevice( display );

				document.body.appendChild( WEBVR.getButton( display, renderer.domElement ) );

			} );

			//

			window.addEventListener( 'resize', onWindowResize, false );

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			//

			var position = new THREE.Vector3();
			var tangent = new THREE.Vector3();

			var lookAt = new THREE.Vector3();

			var velocity = 0;
			var progress = 0;

			var prevTime = performance.now();

			function render() {

				var time = performance.now();
				var delta = time - prevTime;

				for ( var i = 0; i < funfairs.length; i ++ ) {

					funfairs[ i ].rotation.y = time * 0.0004;

				}

				//

				progress += velocity;
				progress = progress % 1;

				position.copy( curve.getPointAt( progress ) );
				position.y += 0.3;

				train.position.copy( position );

				tangent.copy( curve.getTangentAt( progress ) );

				velocity -= tangent.y * 0.0000001 * delta;
				velocity = Math.max( 0.00004, Math.min( 0.0002, velocity ) );

				train.lookAt( lookAt.copy( position ).sub( tangent ) );

				//

				renderer.render( scene, camera );

				prevTime = time;

			}

			renderer.animate( render );