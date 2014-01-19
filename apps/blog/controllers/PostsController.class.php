<?php 

	Library::import( 'recess.framework.controllers.Controller' );
	Library::import( 'blog.models.PostModel' );

	/**
	 * !RespondsWith Layouts
	 * !Prefix Routes: /, Views: home/
	 */

	class PostsController extends Controller {

		/** !Route GET, posts */
		public function listPosts () {
			$post = new PostModel();
    		$this->posts = $post->all();
		}

		/** !Route GET, posts/$id */
		public function show ( $id ) {
			$post = new PostModel( $id );
			$this->post = $post->find()->first();
		}

		/** !Route GET, posts/write */
		public function write () {
			$this->post = new PostModel();
		}


		/** !Route POST, posts */
		public function create () {
			$post = new PostModel( $this->request->post[ 'post' ] );
		    if ( $post->save() ) {
		        $this->redirect( $this->urlTo( 'listPosts' ) );
		    } else {
		        return $this->ok( 'write' );
		    }
		}


	}

?>