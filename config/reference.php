<?php

// This file is auto-generated and is for apps only. Bundles SHOULD NOT rely on its content.

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\Config\Loader\ParamConfigurator as Param;

/**
 * This class provides array-shapes for configuring the services and bundles of an application.
 *
 * Services declared with the config() method below are autowired and autoconfigured by default.
 *
 * This is for apps only. Bundles SHOULD NOT use it.
 *
 * Example:
 *
 *     ```php
 *     // config/services.php
 *     namespace Symfony\Component\DependencyInjection\Loader\Configurator;
 *
 *     return App::config([
 *         'services' => [
 *             'App\\' => [
 *                 'resource' => '../src/',
 *             ],
 *         ],
 *     ]);
 *     ```
 *
 * @psalm-type ImportsConfig = list<string|array{
 *     resource: string,
 *     type?: string|null,
 *     ignore_errors?: bool|'not_found',
 * }>
 * @psalm-type ParametersConfig = array<string, scalar|\UnitEnum|array<scalar|\UnitEnum|array<mixed>|Param|null>|Param|null>
 * @psalm-type ArgumentsType = list<mixed>|array<string, mixed>
 * @psalm-type CallType = array<string, ArgumentsType>|array{0:string, 1?:ArgumentsType, 2?:bool}|array{method:string, arguments?:ArgumentsType, returns_clone?:bool}
 * @psalm-type TagsType = list<string|array<string, array<string, mixed>>> // arrays inside the list must have only one element, with the tag name as the key
 * @psalm-type CallbackType = string|array{0:string|ReferenceConfigurator,1:string}|\Closure|ReferenceConfigurator|ExpressionConfigurator
 * @psalm-type DeprecationType = array{package: string, version: string, message?: string}
 * @psalm-type DefaultsType = array{
 *     public?: bool,
 *     tags?: TagsType,
 *     resource_tags?: TagsType,
 *     autowire?: bool,
 *     autoconfigure?: bool,
 *     bind?: array<string, mixed>,
 * }
 * @psalm-type InstanceofType = array{
 *     shared?: bool,
 *     lazy?: bool|string,
 *     public?: bool,
 *     factory?: CallbackType,
 *     properties?: array<string, mixed>,
 *     configurator?: CallbackType,
 *     calls?: list<CallType>,
 *     tags?: TagsType,
 *     resource_tags?: TagsType,
 *     autowire?: bool,
 *     bind?: array<string, mixed>,
 *     constructor?: string,
 * }
 * @psalm-type DefinitionType = array{
 *     class?: string,
 *     file?: string,
 *     parent?: string,
 *     shared?: bool,
 *     synthetic?: bool,
 *     lazy?: bool|string,
 *     public?: bool,
 *     abstract?: bool,
 *     deprecated?: DeprecationType,
 *     factory?: CallbackType,
 *     configurator?: CallbackType,
 *     arguments?: ArgumentsType,
 *     properties?: array<string, mixed>,
 *     calls?: list<CallType>,
 *     tags?: TagsType,
 *     resource_tags?: TagsType,
 *     decorates?: string,
 *     decorates_tag?: string,
 *     decoration_within?: string|list<string>,
 *     decoration_around?: string|list<string>,
 *     decoration_inner_name?: string,
 *     decoration_priority?: int,
 *     decoration_on_invalid?: 'exception'|'ignore'|null,
 *     autowire?: bool,
 *     autoconfigure?: bool,
 *     bind?: array<string, mixed>,
 *     constructor?: string,
 *     from_callable?: CallbackType,
 * }
 * @psalm-type AliasType = string|array{
 *     alias: string,
 *     public?: bool,
 *     deprecated?: DeprecationType,
 * }
 * @psalm-type PrototypeType = array{
 *     resource: string,
 *     namespace?: string,
 *     exclude?: string|list<string>,
 *     parent?: string,
 *     shared?: bool,
 *     lazy?: bool|string,
 *     public?: bool,
 *     abstract?: bool,
 *     deprecated?: DeprecationType,
 *     factory?: CallbackType,
 *     arguments?: ArgumentsType,
 *     properties?: array<string, mixed>,
 *     configurator?: CallbackType,
 *     calls?: list<CallType>,
 *     tags?: TagsType,
 *     resource_tags?: TagsType,
 *     autowire?: bool,
 *     autoconfigure?: bool,
 *     bind?: array<string, mixed>,
 *     constructor?: string,
 * }
 * @psalm-type StackType = array{
 *     stack: list<DefinitionType|AliasType|PrototypeType|array<class-string, ArgumentsType|null>>,
 *     public?: bool,
 *     deprecated?: DeprecationType,
 *     decorates?: string,
 *     decorates_tag?: string,
 *     decoration_within?: string|list<string>,
 *     decoration_around?: string|list<string>,
 *     decoration_inner_name?: string,
 *     decoration_priority?: int,
 *     decoration_on_invalid?: 'exception'|'ignore'|null,
 * }
 * @psalm-type ServicesConfig = array{
 *     _defaults?: DefaultsType,
 *     _instanceof?: array<class-string, InstanceofType>,
 *     ...<string, DefinitionType|AliasType|PrototypeType|StackType|ArgumentsType|null>
 * }
 * @psalm-type ExtensionType = array<mixed>|scalar|\UnitEnum|Param|null
 * @psalm-type RouterConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: false
 *     resource?: scalar|Param|null, // Default: null
 *     type?: scalar|Param|null,
 *     default_uri?: scalar|Param|null, // The default URI used to generate URLs in a non-HTTP context. // Default: null
 *     http_port?: scalar|Param|null, // Default: 80
 *     https_port?: scalar|Param|null, // Default: 443
 *     strict_requirements?: scalar|Param|null, // Set to true to throw an exception when a parameter does not match the requirements. Set to false to disable exceptions when a parameter does not match the requirements (and return null instead). Set to null to disable parameter checks against requirements. Defaults to true in debug mode and to null otherwise.
 *     utf8?: bool|Param, // Resolved at compile time // Default: true
 * }
 * @psalm-type CacheConfig = array{
 *     prefix_seed?: scalar|Param|null, // Used to namespace cache keys when using several apps with the same shared backend. // Resolved at compile time // Default: "_%kernel.project_dir%.%kernel.container_class%"
 *     app?: scalar|Param|null, // App related cache pools configuration. Cannot be combined with "default_provider". // Resolved at compile time // Default: "cache.adapter.filesystem"
 *     system?: scalar|Param|null, // System related cache pools configuration. // Resolved at compile time // Default: "cache.adapter.system"
 *     directory?: scalar|Param|null, // Default: "%kernel.share_dir%/pools/app"
 *     default_provider?: scalar|Param|null, // DSN of the backend to use for "cache.app"; the adapter is deduced from it. Replaces "app", which cannot be set alongside it.
 *     default_psr6_provider?: scalar|Param|null,
 *     default_redis_provider?: scalar|Param|null, // Default: "redis://localhost"
 *     default_valkey_provider?: scalar|Param|null, // Default: "valkey://localhost"
 *     default_memcached_provider?: scalar|Param|null, // Default: "memcached://localhost"
 *     default_doctrine_dbal_provider?: scalar|Param|null, // Default: "database_connection"
 *     default_pdo_provider?: scalar|Param|null, // Default: null
 *     default_mongodb_provider?: scalar|Param|null, // Default: "mongodb://localhost/app"
 *     pools?: array<string, array{ // Default: []
 *         adapters?: Param|string|list<scalar|Param|null>,
 *         tags?: scalar|Param|null, // Resolved at compile time // Default: null
 *         public?: bool|Param, // Resolved at compile time // Default: false
 *         default_lifetime?: scalar|Param|null, // Default lifetime of the pool.
 *         provider?: scalar|Param|null, // Overwrite the setting from the default provider for this adapter.
 *         early_expiration_message_bus?: scalar|Param|null, // Resolved at compile time
 *         clearer?: scalar|Param|null, // Resolved at compile time
 *         marshaller?: scalar|Param|null, // The marshaller service to use for this pool. // Resolved at compile time
 *     }>,
 * }
 * @psalm-type AssetConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     strict_mode?: bool|Param, // Throw an exception if an entry is missing from the manifest.json. // Resolved at compile time // Default: false
 *     version_strategy?: scalar|Param|null, // Resolved at compile time // Default: null
 *     version?: scalar|Param|null, // Default: null
 *     version_format?: scalar|Param|null, // Default: "%%s?%%s"
 *     json_manifest_path?: scalar|Param|null, // Default: null
 *     base_path?: scalar|Param|null, // Default: ""
 *     base_urls?: Param|string|list<scalar|Param|null>,
 *     packages?: array<string, array{ // Default: []
 *         strict_mode?: bool|Param, // Throw an exception if an entry is missing from the manifest.json. // Resolved at compile time // Default: false
 *         version_strategy?: scalar|Param|null, // Resolved at compile time // Default: null
 *         version?: scalar|Param|null,
 *         version_format?: scalar|Param|null, // Default: null
 *         json_manifest_path?: scalar|Param|null, // Default: null
 *         base_path?: scalar|Param|null, // Default: ""
 *         base_urls?: Param|string|list<scalar|Param|null>,
 *     }>,
 * }
 * @psalm-type SerializerConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     enable_attributes?: bool|Param, // Resolved at compile time // Default: true
 *     name_converter?: scalar|Param|null, // Resolved at compile time
 *     circular_reference_handler?: scalar|Param|null, // Resolved at compile time
 *     max_depth_handler?: scalar|Param|null, // Resolved at compile time
 *     mapping?: array{
 *         paths?: list<scalar|Param|null>,
 *     },
 *     default_context?: array<string, mixed>,
 *     named_serializers?: array<string, array{ // Default: []
 *         name_converter?: scalar|Param|null, // Resolved at compile time
 *         default_context?: array<string, mixed>,
 *         include_built_in_normalizers?: bool|Param, // Whether to include the built-in normalizers // Resolved at compile time // Default: true
 *         include_built_in_encoders?: bool|Param, // Whether to include the built-in encoders // Resolved at compile time // Default: true
 *     }>,
 * }
 * @psalm-type ValidationConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     enable_attributes?: bool|Param, // Resolved at compile time // Default: true
 *     static_method?: Param|string|list<scalar|Param|null>,
 *     translation_domain?: scalar|Param|null, // Default: "validators"
 *     email_validation_mode?: "html5"|"html5-allow-no-tld"|"strict"|Param, // Default: "html5"
 *     mapping?: array{
 *         paths?: list<scalar|Param|null>,
 *     },
 *     not_compromised_password?: bool|array{
 *         enabled?: bool|Param|null, // When disabled, compromised passwords will be accepted as valid. Defaults to false when "framework.test" is enabled, to true otherwise. // Resolved at compile time // Default: null
 *         endpoint?: scalar|Param|null, // API endpoint for the NotCompromisedPassword Validator. // Default: null
 *     },
 *     disable_translation?: bool|Param, // Resolved at compile time // Default: false
 *     property_metadata_existence_check?: bool|Param, // When enabled, validateProperty() and validatePropertyValue() throw an exception if no metadata is found for the given property. // Resolved at compile time // Default: false
 *     auto_mapping?: array<string, array{ // Default: []
 *         services?: list<scalar|Param|null>,
 *     }>,
 * }
 * @psalm-type TranslationConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     fallbacks?: Param|string|list<scalar|Param|null>,
 *     logging?: bool|Param, // Resolved at compile time // Default: false
 *     formatter?: scalar|Param|null, // Resolved at compile time // Default: "translator.formatter.default"
 *     cache_dir?: scalar|Param|null, // Default: "%kernel.cache_dir%/translations"
 *     default_path?: scalar|Param|null, // The default path used to load translations. // Resolved at compile time // Default: "%kernel.project_dir%/translations"
 *     paths?: list<scalar|Param|null>,
 *     pseudo_localization?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         accents?: bool|Param, // Default: true
 *         expansion_factor?: float|Param, // Default: 1.0
 *         brackets?: bool|Param, // Default: true
 *         parse_html?: bool|Param, // Default: false
 *         localizable_html_attributes?: list<scalar|Param|null>,
 *     },
 *     providers?: array<string, array{ // Default: []
 *         dsn?: scalar|Param|null,
 *         domains?: array<string, scalar|Param|null>,
 *         locales?: list<scalar|Param|null>,
 *     }>,
 *     globals?: array<string, Param|string|array{ // Default: []
 *         value?: mixed,
 *         message?: string|Param,
 *         parameters?: array<string, scalar|Param|null>,
 *         domain?: string|Param,
 *     }>,
 * }
 * @psalm-type TypeInfoConfig = bool|array{
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     aliases?: array<string, scalar|Param|null>,
 * }
 * @psalm-type PropertyAccessConfig = bool|array{ // Property access configuration
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     magic_call?: bool|Param, // Resolved at compile time // Default: false
 *     magic_get?: bool|Param, // Resolved at compile time // Default: true
 *     magic_set?: bool|Param, // Resolved at compile time // Default: true
 *     throw_exception_on_invalid_index?: bool|Param, // Resolved at compile time // Default: false
 *     throw_exception_on_invalid_property_path?: bool|Param, // Resolved at compile time // Default: true
 *     wildcard_reads?: bool|Param, // Enables reading every element of a collection through a "[*]" wildcard. // Default: false
 * }
 * @psalm-type PropertyInfoConfig = bool|array{ // Property info configuration
 *     enabled?: bool|Param, // Resolved at compile time // Default: true
 *     with_constructor_extractor?: bool|Param, // Registers the constructor extractor. // Resolved at compile time // Default: true
 * }
 * @psalm-type FrameworkConfig = array{
 *     secret?: scalar|Param|null, // A secret that must not change. The options that sign data default to it and take a list of secrets to rotate theirs.
 *     http_method_override?: bool|Param, // Set true to enable support for the '_method' request parameter to determine the intended HTTP method on POST requests. // Resolved at compile time // Default: false
 *     allowed_http_method_override?: null|list<string|Param>,
 *     trust_x_sendfile_type_header?: scalar|Param|null, // Set true to enable support for xsendfile in binary file responses. // Default: "%env(bool:default::SYMFONY_TRUST_X_SENDFILE_TYPE_HEADER)%"
 *     ide?: scalar|Param|null, // Deprecated: Setting the "framework.ide.ide" configuration option is deprecated, use the "SYMFONY_IDE" env var instead. // Default: null
 *     test?: bool|Param, // Resolved at compile time
 *     default_locale?: scalar|Param|null, // Default: "en"
 *     set_locale_from_accept_language?: bool|Param, // Whether to use the Accept-Language HTTP header to set the Request locale (only when the "_locale" request attribute is not passed). // Default: false
 *     set_content_language_from_locale?: bool|Param, // Whether to set the Content-Language HTTP header on the Response using the Request locale. // Default: false
 *     enabled_locales?: list<scalar|Param|null>,
 *     trusted_hosts?: Param|string|list<scalar|Param|null>,
 *     trusted_proxies?: mixed, // Default: ["%env(default::SYMFONY_TRUSTED_PROXIES)%"]
 *     trusted_headers?: Param|string|list<scalar|Param|null>,
 *     error_controller?: scalar|Param|null, // Default: "error_controller"
 *     handle_all_throwables?: bool|Param, // HttpKernel will handle all kinds of \Throwable. // Default: true
 *     csrf_protection?: bool|array{
 *         enabled?: scalar|Param|null, // Resolved at compile time // Default: null
 *         stateless_token_ids?: list<scalar|Param|null>,
 *         check_header?: scalar|Param|null, // Whether to check the CSRF token in a header in addition to a cookie when using stateless protection. // Default: false
 *         cookie_name?: scalar|Param|null, // The name of the cookie to use when using stateless protection. // Default: "csrf-token"
 *     },
 *     form?: bool|array{ // Form configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *         csrf_protection?: bool|array{
 *             enabled?: scalar|Param|null, // Resolved at compile time // Default: null
 *             token_id?: scalar|Param|null, // Default: null
 *             field_name?: scalar|Param|null, // Default: "_token"
 *             field_attr?: array<string, scalar|Param|null>,
 *         },
 *     },
 *     http_cache?: bool|array{ // HTTP cache configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         debug?: bool|Param, // Default: "%kernel.debug%"
 *         trace_level?: "none"|"short"|"full"|Param,
 *         trace_header?: scalar|Param|null,
 *         cache_status?: scalar|Param|null, // Enables the RFC 9211 "Cache-Status" response header and names this cache in it, e.g. "Symfony". No header is added when null.
 *         default_ttl?: int|Param,
 *         private_headers?: list<scalar|Param|null>,
 *         skip_response_headers?: list<scalar|Param|null>,
 *         allow_reload?: bool|Param,
 *         allow_revalidate?: bool|Param,
 *         stale_while_revalidate?: int|Param,
 *         stale_if_error?: int|Param,
 *         terminate_on_cache_hit?: bool|Param, // Deprecated: Setting the "framework.http_cache.terminate_on_cache_hit.terminate_on_cache_hit" configuration option is deprecated. It will be removed in version 9.0.
 *     },
 *     esi?: bool|array{ // ESI configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     ssi?: bool|array{ // SSI configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     fragments?: bool|array{ // Fragments configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         hinclude_default_template?: scalar|Param|null, // Deprecated: Setting the "framework.fragments.hinclude_default_template.hinclude_default_template" configuration option is deprecated. It will be removed in version 9.0. // Default: null
 *         path?: scalar|Param|null, // Default: "/_fragment"
 *     },
 *     uri_signer?: array{ // URI signer configuration
 *         secret?: Param|string|list<scalar|Param|null>,
 *         expiration?: int|Param, // Default expiration of signed URIs, in seconds. // Default: null
 *     },
 *     profiler?: bool|array{ // Profiler configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         collect?: bool|Param, // Default: true
 *         collect_parameter?: scalar|Param|null, // The name of the parameter to use to enable or disable collection on a per request basis. // Default: null
 *         only_exceptions?: bool|Param, // Default: false
 *         only_main_requests?: bool|Param, // Default: false
 *         excluded_paths?: Param|string|list<scalar|Param|null>,
 *         excluded_http_codes?: Param|int|string|list<Param|string|list<scalar|Param|null>>,
 *         dsn?: scalar|Param|null, // Resolved at compile time // Default: "file:%kernel.cache_dir%/profiler"
 *         collect_serializer_data?: true|Param, // Deprecated: Setting the "framework.profiler.collect_serializer_data.collect_serializer_data" configuration option is deprecated. It will be removed in version 9.0. // Default: true
 *     },
 *     workflows?: mixed,
 *     router?: RouterConfig,
 *     assets?: AssetConfig,
 *     asset_mapper?: mixed,
 *     translator?: TranslationConfig,
 *     validation?: ValidationConfig,
 *     serializer?: SerializerConfig,
 *     property_access?: PropertyAccessConfig,
 *     type_info?: TypeInfoConfig,
 *     property_info?: PropertyInfoConfig,
 *     cache?: CacheConfig,
 *     web_link?: mixed,
 *     lock?: mixed,
 *     semaphore?: mixed,
 *     messenger?: mixed,
 *     scheduler?: mixed,
 *     http_client?: mixed,
 *     mailer?: mixed,
 *     notifier?: mixed,
 *     rate_limiter?: mixed,
 *     uid?: mixed,
 *     html_sanitizer?: mixed,
 *     webhook?: mixed,
 *     remote_event?: mixed,
 *     json_streamer?: mixed,
 *     session?: bool|array{ // Session configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         storage_factory_id?: scalar|Param|null, // Defaults to "session.storage.factory.mock_file" when "framework.test" is true, to "session.storage.factory.native" otherwise. // Resolved at compile time // Default: null
 *         handler_id?: scalar|Param|null, // Defaults to using the native session handler, or to the native *file* session handler if "save_path" is not null.
 *         name?: scalar|Param|null,
 *         cookie_lifetime?: scalar|Param|null,
 *         cookie_path?: scalar|Param|null,
 *         cookie_domain?: scalar|Param|null,
 *         cookie_secure?: true|false|"auto"|Param, // Resolved at compile time // Default: "auto"
 *         cookie_httponly?: bool|Param, // Default: true
 *         cookie_samesite?: null|"lax"|"strict"|"none"|Param, // Default: "lax"
 *         use_cookies?: bool|Param,
 *         gc_divisor?: scalar|Param|null,
 *         gc_probability?: scalar|Param|null,
 *         gc_maxlifetime?: scalar|Param|null,
 *         save_path?: scalar|Param|null, // Defaults to "%kernel.share_dir%/sessions" if the "handler_id" option is not null.
 *         metadata_update_threshold?: int|Param, // Seconds to wait between 2 session metadata updates. // Default: 0
 *         isolate_attributes?: bool|Param, // Whether to deep-clone the values read from and passed to session attributes, so that only values passed to set() are saved. // Default: false
 *     },
 *     request?: bool|array{ // Request configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         formats?: array<string, Param|string|list<scalar|Param|null>>,
 *         serializer?: scalar|Param|null, // Service id of the serializer that maps request payloads and query strings to controller arguments with #[MapRequestPayload] and #[MapQueryString], e.g. "serializer.api" for the named serializer "api". // Resolved at compile time // Default: null
 *     },
 *     response?: array{ // Response configuration
 *         serializer?: scalar|Param|null, // Service id of the serializer that serializes the values returned by controllers with #[Serialize], e.g. "serializer.api" for the named serializer "api". // Resolved at compile time // Default: null
 *     },
 *     php_errors?: array{ // PHP errors handling configuration
 *         log?: mixed, // Use the application logger instead of the PHP logger for logging PHP errors. // Resolved at compile time // Default: true
 *         throw?: bool|Param|null, // Throw PHP errors as \ErrorException instances. Enabled by default when debug is enabled. // Resolved at compile time // Default: null
 *     },
 *     exceptions?: array<string, array{ // Default: []
 *         log_level?: scalar|Param|null, // The level of log message. Null to let Symfony decide. // Default: null
 *         status_code?: scalar|Param|null, // The status code of the response. Null or 0 to let Symfony decide. // Default: null
 *         log_channel?: scalar|Param|null, // The channel of log message. Null to let Symfony decide. // Resolved at compile time // Default: null
 *     }>,
 *     disallow_search_engine_index?: bool|Param|null, // Enabled by default when debug is enabled. // Resolved at compile time // Default: null
 *     secrets?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *         vault_directory?: scalar|Param|null, // Default: "%kernel.project_dir%/config/secrets/%kernel.runtime_environment%"
 *         local_dotenv_file?: scalar|Param|null, // Resolved at compile time // Default: "%kernel.project_dir%/.env.%kernel.environment%.local"
 *         decryption_env_var?: scalar|Param|null, // Resolved at compile time // Default: "base64:default::SYMFONY_DECRYPTION_SECRET"
 *     },
 * }
 * @psalm-type ScssphpConfig = array{
 *     enabled?: bool|Param, // When disabled, ScssPHP will not compile SCSS sources automatically, by user's request. Compiling with CLI tool will still work. // Default: true
 *     autoUpdate?: bool|Param, // Automatically re-compile SCSS sources on updates, when enabled. // Default: true
 *     assets?: array<string, array{ // Default: []
 *         src?: scalar|Param|null, // Path to SCSS source file (entrypoint), relative to Symfony's project directory.
 *         outputFolder?: scalar|Param|null, // Prepends this outputFolder to asset's destination path. // Default: "public"
 *         importPaths?: list<scalar|Param|null>,
 *         variables?: array<string, scalar|Param|null>,
 *         outputStyle?: "expanded"|"compressed"|Param, // Expanded or compressed CSS output. // Default: "compressed"
 *         sourceMap?: bool|Param, // When enabled, the CSS file contains inline sourceMap comments. // Default: false
 *         appendTimestamp?: bool|Param, // When enabled, the timestamp of the asset, will be appended as query string. // Default: true
 *     }>,
 * }
 * @psalm-type EkoFeedConfig = array{
 *     hydrator?: scalar|Param|null, // Default: "Eko\\FeedBundle\\Hydrator\\DefaultHydrator"
 *     translation_domain?: scalar|Param|null, // Default: null
 *     feeds?: array<string, array{ // Default: []
 *         title?: scalar|Param|null,
 *         description?: scalar|Param|null,
 *         link?: Param|string|array{
 *             route_name?: scalar|Param|null,
 *             route_params?: array<string, scalar|Param|null>,
 *             uri?: scalar|Param|null,
 *         },
 *         encoding?: scalar|Param|null,
 *         author?: scalar|Param|null,
 *     }>,
 * }
 * @psalm-type TwigConfig = array{
 *     form_themes?: list<scalar|Param|null>,
 *     globals?: array<string, array{ // Default: []
 *         id?: scalar|Param|null, // Resolved at compile time
 *         type?: scalar|Param|null, // Resolved at compile time
 *         value?: mixed,
 *         ...<string, mixed>
 *     }>,
 *     autoescape_service?: scalar|Param|null, // Resolved at compile time // Default: null
 *     autoescape_service_method?: scalar|Param|null, // Default: null
 *     cache?: scalar|Param|null, // Resolved at compile time // Default: true
 *     charset?: scalar|Param|null, // Default: "%kernel.charset%"
 *     debug?: bool|Param, // Resolved at compile time // Default: "%kernel.debug%"
 *     strict_variables?: bool|Param, // Default: "%kernel.debug%"
 *     auto_reload?: scalar|Param|null, // Resolved at compile time
 *     optimizations?: int|Param,
 *     default_path?: scalar|Param|null, // The default path used to load templates. // Resolved at compile time // Default: "%kernel.project_dir%/templates"
 *     file_name_pattern?: Param|string|list<scalar|Param|null>,
 *     paths?: array<string, mixed>,
 *     date?: array{ // The default format options used by the date filter.
 *         format?: scalar|Param|null, // Default: "F j, Y H:i"
 *         interval_format?: scalar|Param|null, // Default: "%d days"
 *         timezone?: scalar|Param|null, // The timezone used when formatting dates, when set to null, the timezone returned by date_default_timezone_get() is used. // Default: null
 *     },
 *     number_format?: array{ // The default format options for the number_format filter.
 *         decimals?: int|Param, // Default: 0
 *         decimal_point?: scalar|Param|null, // Default: "."
 *         thousands_separator?: scalar|Param|null, // Default: ","
 *     },
 *     mailer?: array{
 *         html_to_text_converter?: scalar|Param|null, // A service implementing the "Symfony\Component\Mime\HtmlToTextConverter\HtmlToTextConverterInterface". // Resolved at compile time // Default: null
 *     },
 * }
 * @psalm-type SyliusThemeConfig = array{
 *     sources?: array{
 *         filesystem?: bool|array{
 *             enabled?: bool|Param, // Resolved at compile time // Default: false
 *             filename?: scalar|Param|null, // Default: "composer.json"
 *             scan_depth?: scalar|Param|null, // Restrict depth to scan for configuration file inside theme folder // Default: 1
 *             directories?: list<scalar|Param|null>,
 *         },
 *         test?: bool|array{
 *             enabled?: bool|Param, // Resolved at compile time // Default: false
 *         },
 *     },
 *     assets?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     templating?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     translations?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     context?: scalar|Param|null, // Default: "sylius.theme.context.settable"
 *     legacy_mode?: bool|Param, // Deprecated: "legacy_mode" at path "sylius_theme.legacy_mode" is deprecated since Sylius/ThemeBundle 2.0 and will be removed in 3.0. // Default: false
 * }
 * @psalm-type StofDoctrineExtensionsConfig = array{
 *     orm?: array<string, array{ // Default: []
 *         translatable?: scalar|Param|null, // Default: false
 *         timestampable?: scalar|Param|null, // Default: false
 *         blameable?: scalar|Param|null, // Default: false
 *         sluggable?: scalar|Param|null, // Default: false
 *         tree?: scalar|Param|null, // Default: false
 *         loggable?: scalar|Param|null, // Default: false
 *         ip_traceable?: scalar|Param|null, // Default: false
 *         sortable?: scalar|Param|null, // Default: false
 *         softdeleteable?: scalar|Param|null, // Default: false
 *         uploadable?: scalar|Param|null, // Default: false
 *         reference_integrity?: scalar|Param|null, // Default: false
 *     }>,
 *     mongodb?: array<string, array{ // Default: []
 *         translatable?: scalar|Param|null, // Default: false
 *         timestampable?: scalar|Param|null, // Default: false
 *         blameable?: scalar|Param|null, // Default: false
 *         sluggable?: scalar|Param|null, // Default: false
 *         tree?: scalar|Param|null, // Default: false
 *         loggable?: scalar|Param|null, // Default: false
 *         ip_traceable?: scalar|Param|null, // Default: false
 *         sortable?: scalar|Param|null, // Default: false
 *         softdeleteable?: scalar|Param|null, // Default: false
 *         uploadable?: scalar|Param|null, // Default: false
 *         reference_integrity?: scalar|Param|null, // Default: false
 *     }>,
 *     class?: array{
 *         translatable?: scalar|Param|null, // Default: "Gedmo\\Translatable\\TranslatableListener"
 *         timestampable?: scalar|Param|null, // Default: "Gedmo\\Timestampable\\TimestampableListener"
 *         blameable?: scalar|Param|null, // Default: "Gedmo\\Blameable\\BlameableListener"
 *         sluggable?: scalar|Param|null, // Default: "Gedmo\\Sluggable\\SluggableListener"
 *         tree?: scalar|Param|null, // Default: "Gedmo\\Tree\\TreeListener"
 *         loggable?: scalar|Param|null, // Default: "Gedmo\\Loggable\\LoggableListener"
 *         sortable?: scalar|Param|null, // Default: "Gedmo\\Sortable\\SortableListener"
 *         softdeleteable?: scalar|Param|null, // Default: "Gedmo\\SoftDeleteable\\SoftDeleteableListener"
 *         uploadable?: scalar|Param|null, // Default: "Gedmo\\Uploadable\\UploadableListener"
 *         reference_integrity?: scalar|Param|null, // Default: "Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener"
 *     },
 *     softdeleteable?: array{
 *         handle_post_flush_event?: bool|Param, // Default: false
 *     },
 *     uploadable?: array{
 *         default_file_path?: scalar|Param|null, // Default: null
 *         mime_type_guesser_class?: scalar|Param|null, // Default: "Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter"
 *         default_file_info_class?: scalar|Param|null, // Default: "Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo"
 *         validate_writable_directory?: bool|Param, // Default: true
 *     },
 *     default_locale?: scalar|Param|null, // Default: "en"
 *     translation_fallback?: bool|Param, // Default: false
 *     persist_default_translation?: bool|Param, // Default: false
 *     skip_translation_on_load?: bool|Param, // Default: false
 *     metadata_cache_pool?: scalar|Param|null, // Default: null
 * }
 * @psalm-type LiipUrlAutoConverterConfig = array{
 *     linkclass?: scalar|Param|null, // Default: ""
 *     target?: scalar|Param|null, // Default: "_blank"
 *     debugmode?: scalar|Param|null, // Default: false
 * }
 * @psalm-type KnpPaginatorConfig = array{
 *     default_options?: array{
 *         sort_field_name?: scalar|Param|null, // Default: "sort"
 *         sort_direction_name?: scalar|Param|null, // Default: "direction"
 *         filter_field_name?: scalar|Param|null, // Default: "filterField"
 *         filter_value_name?: scalar|Param|null, // Default: "filterValue"
 *         page_name?: scalar|Param|null, // Default: "page"
 *         distinct?: bool|Param, // Default: true
 *         wrap_queries?: bool|Param, // Default: false
 *         page_out_of_range?: scalar|Param|null, // Default: "ignore"
 *         default_limit?: scalar|Param|null, // Default: 10
 *     },
 *     template?: array{
 *         pagination?: scalar|Param|null, // Default: "@KnpPaginator/Pagination/sliding.html.twig"
 *         rel_links?: scalar|Param|null, // Default: "@KnpPaginator/Pagination/rel_links.html.twig"
 *         filtration?: scalar|Param|null, // Default: "@KnpPaginator/Pagination/filtration.html.twig"
 *         sortable?: scalar|Param|null, // Default: "@KnpPaginator/Pagination/sortable_link.html.twig"
 *     },
 *     page_range?: scalar|Param|null, // Default: 5
 *     page_limit?: scalar|Param|null, // Default: null
 *     convert_exception?: bool|Param, // Default: false
 *     remove_first_page_param?: bool|Param, // Default: false
 * }
 * @psalm-type KnpMenuConfig = array{
 *     providers?: array{
 *         builder_alias?: bool|Param, // Default: true
 *     },
 *     twig?: array{
 *         template?: scalar|Param|null, // Default: "@KnpMenu/menu.html.twig"
 *     },
 *     route_voter?: bool|Param, // Default: true
 *     default_renderer?: scalar|Param|null, // Default: "twig"
 * }
 * @psalm-type JmsTranslationConfig = array{
 *     locales?: list<scalar|Param|null>,
 *     dumper?: array{
 *         add_date?: bool|Param, // Default: true
 *         add_references?: bool|Param, // Default: true
 *     },
 *     source_language?: scalar|Param|null, // Default: "en"
 *     configs?: array<string, array{ // Default: []
 *         extractors?: list<scalar|Param|null>,
 *         dirs?: list<scalar|Param|null>,
 *         excluded_dirs?: list<scalar|Param|null>,
 *         excluded_names?: list<scalar|Param|null>,
 *         external_translations_dirs?: list<scalar|Param|null>,
 *         output_format?: scalar|Param|null,
 *         default_output_format?: scalar|Param|null,
 *         intl_icu?: scalar|Param|null, // Default: false
 *         ignored_domains?: list<scalar|Param|null>,
 *         domains?: list<scalar|Param|null>,
 *         output_dir?: scalar|Param|null,
 *         keep?: scalar|Param|null, // Default: false
 *     }>,
 * }
 * @psalm-type DoctrineConfig = array{
 *     dbal?: array{
 *         default_connection?: scalar|Param|null,
 *         types?: array<string, Param|string|array{ // Default: []
 *             class?: scalar|Param|null,
 *         }>,
 *         driver_schemes?: array<string, scalar|Param|null>,
 *         connections?: array<string, array{ // Default: []
 *             url?: scalar|Param|null, // A URL with connection information; any parameter value parsed from this string will override explicitly set parameters
 *             dbname?: scalar|Param|null,
 *             host?: scalar|Param|null, // Defaults to "localhost" at runtime.
 *             port?: scalar|Param|null, // Defaults to null at runtime.
 *             user?: scalar|Param|null, // Defaults to "root" at runtime.
 *             password?: scalar|Param|null, // Defaults to null at runtime.
 *             dbname_suffix?: scalar|Param|null, // Adds the given suffix to the configured database name, this option has no effects for the SQLite platform
 *             application_name?: scalar|Param|null,
 *             charset?: scalar|Param|null,
 *             path?: scalar|Param|null,
 *             memory?: bool|Param,
 *             unix_socket?: scalar|Param|null, // The unix socket to use for MySQL
 *             persistent?: bool|Param, // True to use as persistent connection for the ibm_db2 driver
 *             protocol?: scalar|Param|null, // The protocol to use for the ibm_db2 driver (default to TCPIP if omitted)
 *             service?: bool|Param, // True to use SERVICE_NAME as connection parameter instead of SID for Oracle
 *             servicename?: scalar|Param|null, // Overrules dbname parameter if given and used as SERVICE_NAME or SID connection parameter for Oracle depending on the service parameter.
 *             sessionMode?: scalar|Param|null, // The session mode to use for the oci8 driver
 *             server?: scalar|Param|null, // The name of a running database server to connect to for SQL Anywhere.
 *             default_dbname?: scalar|Param|null, // Override the default database (postgres) to connect to for PostgreSQL connection.
 *             sslmode?: scalar|Param|null, // Determines whether or with what priority a SSL TCP/IP connection will be negotiated with the server for PostgreSQL.
 *             sslrootcert?: scalar|Param|null, // The name of a file containing SSL certificate authority (CA) certificate(s). If the file exists, the server's certificate will be verified to be signed by one of these authorities.
 *             sslcert?: scalar|Param|null, // The path to the SSL client certificate file for PostgreSQL.
 *             sslkey?: scalar|Param|null, // The path to the SSL client key file for PostgreSQL.
 *             sslcrl?: scalar|Param|null, // The file name of the SSL certificate revocation list for PostgreSQL.
 *             pooled?: bool|Param, // True to use a pooled server with the oci8/pdo_oracle driver
 *             MultipleActiveResultSets?: bool|Param, // Configuring MultipleActiveResultSets for the pdo_sqlsrv driver
 *             instancename?: scalar|Param|null, // Optional parameter, complete whether to add the INSTANCE_NAME parameter in the connection. It is generally used to connect to an Oracle RAC server to select the name of a particular instance.
 *             connectstring?: scalar|Param|null, // Complete Easy Connect connection descriptor, see https://docs.oracle.com/database/121/NETAG/naming.htm.When using this option, you will still need to provide the user and password parameters, but the other parameters will no longer be used. Note that when using this parameter, the getHost and getPort methods from Doctrine\DBAL\Connection will no longer function as expected.
 *             driver?: scalar|Param|null, // Default: "pdo_mysql"
 *             auto_commit?: bool|Param,
 *             schema_filter?: scalar|Param|null,
 *             logging?: bool|Param, // Default: true
 *             profiling?: bool|Param, // Default: true
 *             profiling_collect_backtrace?: bool|Param, // Enables collecting backtraces when profiling is enabled // Default: false
 *             profiling_collect_schema_errors?: bool|Param, // Enables collecting schema errors when profiling is enabled // Default: true
 *             server_version?: scalar|Param|null,
 *             idle_connection_ttl?: int|Param, // Default: 600
 *             driver_class?: scalar|Param|null,
 *             wrapper_class?: scalar|Param|null,
 *             keep_replica?: bool|Param,
 *             options?: array<string, mixed>,
 *             mapping_types?: array<string, scalar|Param|null>,
 *             default_table_options?: array<string, scalar|Param|null>,
 *             schema_manager_factory?: scalar|Param|null, // Default: "doctrine.dbal.default_schema_manager_factory"
 *             result_cache?: scalar|Param|null,
 *             replicas?: array<string, array{ // Default: []
 *                 url?: scalar|Param|null, // A URL with connection information; any parameter value parsed from this string will override explicitly set parameters
 *                 dbname?: scalar|Param|null,
 *                 host?: scalar|Param|null, // Defaults to "localhost" at runtime.
 *                 port?: scalar|Param|null, // Defaults to null at runtime.
 *                 user?: scalar|Param|null, // Defaults to "root" at runtime.
 *                 password?: scalar|Param|null, // Defaults to null at runtime.
 *                 dbname_suffix?: scalar|Param|null, // Adds the given suffix to the configured database name, this option has no effects for the SQLite platform
 *                 application_name?: scalar|Param|null,
 *                 charset?: scalar|Param|null,
 *                 path?: scalar|Param|null,
 *                 memory?: bool|Param,
 *                 unix_socket?: scalar|Param|null, // The unix socket to use for MySQL
 *                 persistent?: bool|Param, // True to use as persistent connection for the ibm_db2 driver
 *                 protocol?: scalar|Param|null, // The protocol to use for the ibm_db2 driver (default to TCPIP if omitted)
 *                 service?: bool|Param, // True to use SERVICE_NAME as connection parameter instead of SID for Oracle
 *                 servicename?: scalar|Param|null, // Overrules dbname parameter if given and used as SERVICE_NAME or SID connection parameter for Oracle depending on the service parameter.
 *                 sessionMode?: scalar|Param|null, // The session mode to use for the oci8 driver
 *                 server?: scalar|Param|null, // The name of a running database server to connect to for SQL Anywhere.
 *                 default_dbname?: scalar|Param|null, // Override the default database (postgres) to connect to for PostgreSQL connection.
 *                 sslmode?: scalar|Param|null, // Determines whether or with what priority a SSL TCP/IP connection will be negotiated with the server for PostgreSQL.
 *                 sslrootcert?: scalar|Param|null, // The name of a file containing SSL certificate authority (CA) certificate(s). If the file exists, the server's certificate will be verified to be signed by one of these authorities.
 *                 sslcert?: scalar|Param|null, // The path to the SSL client certificate file for PostgreSQL.
 *                 sslkey?: scalar|Param|null, // The path to the SSL client key file for PostgreSQL.
 *                 sslcrl?: scalar|Param|null, // The file name of the SSL certificate revocation list for PostgreSQL.
 *                 pooled?: bool|Param, // True to use a pooled server with the oci8/pdo_oracle driver
 *                 MultipleActiveResultSets?: bool|Param, // Configuring MultipleActiveResultSets for the pdo_sqlsrv driver
 *                 instancename?: scalar|Param|null, // Optional parameter, complete whether to add the INSTANCE_NAME parameter in the connection. It is generally used to connect to an Oracle RAC server to select the name of a particular instance.
 *                 connectstring?: scalar|Param|null, // Complete Easy Connect connection descriptor, see https://docs.oracle.com/database/121/NETAG/naming.htm.When using this option, you will still need to provide the user and password parameters, but the other parameters will no longer be used. Note that when using this parameter, the getHost and getPort methods from Doctrine\DBAL\Connection will no longer function as expected.
 *                 ...<string, mixed>
 *             }>,
 *             ...<string, mixed>
 *         }>,
 *     }|array{
 *         default_connection?: scalar|Param|null,
 *         types?: array<string, Param|string|array{ // Default: []
 *             class?: scalar|Param|null,
 *         }>,
 *         driver_schemes?: array<string, scalar|Param|null>,
 *         url?: scalar|Param|null, // A URL with connection information; any parameter value parsed from this string will override explicitly set parameters
 *         dbname?: scalar|Param|null,
 *         host?: scalar|Param|null, // Defaults to "localhost" at runtime.
 *         port?: scalar|Param|null, // Defaults to null at runtime.
 *         user?: scalar|Param|null, // Defaults to "root" at runtime.
 *         password?: scalar|Param|null, // Defaults to null at runtime.
 *         dbname_suffix?: scalar|Param|null, // Adds the given suffix to the configured database name, this option has no effects for the SQLite platform
 *         application_name?: scalar|Param|null,
 *         charset?: scalar|Param|null,
 *         path?: scalar|Param|null,
 *         memory?: bool|Param,
 *         unix_socket?: scalar|Param|null, // The unix socket to use for MySQL
 *         persistent?: bool|Param, // True to use as persistent connection for the ibm_db2 driver
 *         protocol?: scalar|Param|null, // The protocol to use for the ibm_db2 driver (default to TCPIP if omitted)
 *         service?: bool|Param, // True to use SERVICE_NAME as connection parameter instead of SID for Oracle
 *         servicename?: scalar|Param|null, // Overrules dbname parameter if given and used as SERVICE_NAME or SID connection parameter for Oracle depending on the service parameter.
 *         sessionMode?: scalar|Param|null, // The session mode to use for the oci8 driver
 *         server?: scalar|Param|null, // The name of a running database server to connect to for SQL Anywhere.
 *         default_dbname?: scalar|Param|null, // Override the default database (postgres) to connect to for PostgreSQL connection.
 *         sslmode?: scalar|Param|null, // Determines whether or with what priority a SSL TCP/IP connection will be negotiated with the server for PostgreSQL.
 *         sslrootcert?: scalar|Param|null, // The name of a file containing SSL certificate authority (CA) certificate(s). If the file exists, the server's certificate will be verified to be signed by one of these authorities.
 *         sslcert?: scalar|Param|null, // The path to the SSL client certificate file for PostgreSQL.
 *         sslkey?: scalar|Param|null, // The path to the SSL client key file for PostgreSQL.
 *         sslcrl?: scalar|Param|null, // The file name of the SSL certificate revocation list for PostgreSQL.
 *         pooled?: bool|Param, // True to use a pooled server with the oci8/pdo_oracle driver
 *         MultipleActiveResultSets?: bool|Param, // Configuring MultipleActiveResultSets for the pdo_sqlsrv driver
 *         instancename?: scalar|Param|null, // Optional parameter, complete whether to add the INSTANCE_NAME parameter in the connection. It is generally used to connect to an Oracle RAC server to select the name of a particular instance.
 *         connectstring?: scalar|Param|null, // Complete Easy Connect connection descriptor, see https://docs.oracle.com/database/121/NETAG/naming.htm.When using this option, you will still need to provide the user and password parameters, but the other parameters will no longer be used. Note that when using this parameter, the getHost and getPort methods from Doctrine\DBAL\Connection will no longer function as expected.
 *         driver?: scalar|Param|null, // Default: "pdo_mysql"
 *         auto_commit?: bool|Param,
 *         schema_filter?: scalar|Param|null,
 *         logging?: bool|Param, // Default: true
 *         profiling?: bool|Param, // Default: true
 *         profiling_collect_backtrace?: bool|Param, // Enables collecting backtraces when profiling is enabled // Default: false
 *         profiling_collect_schema_errors?: bool|Param, // Enables collecting schema errors when profiling is enabled // Default: true
 *         server_version?: scalar|Param|null,
 *         idle_connection_ttl?: int|Param, // Default: 600
 *         driver_class?: scalar|Param|null,
 *         wrapper_class?: scalar|Param|null,
 *         keep_replica?: bool|Param,
 *         options?: array<string, mixed>,
 *         mapping_types?: array<string, scalar|Param|null>,
 *         default_table_options?: array<string, scalar|Param|null>,
 *         schema_manager_factory?: scalar|Param|null, // Default: "doctrine.dbal.default_schema_manager_factory"
 *         result_cache?: scalar|Param|null,
 *         replicas?: array<string, array{ // Default: []
 *             url?: scalar|Param|null, // A URL with connection information; any parameter value parsed from this string will override explicitly set parameters
 *             dbname?: scalar|Param|null,
 *             host?: scalar|Param|null, // Defaults to "localhost" at runtime.
 *             port?: scalar|Param|null, // Defaults to null at runtime.
 *             user?: scalar|Param|null, // Defaults to "root" at runtime.
 *             password?: scalar|Param|null, // Defaults to null at runtime.
 *             dbname_suffix?: scalar|Param|null, // Adds the given suffix to the configured database name, this option has no effects for the SQLite platform
 *             application_name?: scalar|Param|null,
 *             charset?: scalar|Param|null,
 *             path?: scalar|Param|null,
 *             memory?: bool|Param,
 *             unix_socket?: scalar|Param|null, // The unix socket to use for MySQL
 *             persistent?: bool|Param, // True to use as persistent connection for the ibm_db2 driver
 *             protocol?: scalar|Param|null, // The protocol to use for the ibm_db2 driver (default to TCPIP if omitted)
 *             service?: bool|Param, // True to use SERVICE_NAME as connection parameter instead of SID for Oracle
 *             servicename?: scalar|Param|null, // Overrules dbname parameter if given and used as SERVICE_NAME or SID connection parameter for Oracle depending on the service parameter.
 *             sessionMode?: scalar|Param|null, // The session mode to use for the oci8 driver
 *             server?: scalar|Param|null, // The name of a running database server to connect to for SQL Anywhere.
 *             default_dbname?: scalar|Param|null, // Override the default database (postgres) to connect to for PostgreSQL connection.
 *             sslmode?: scalar|Param|null, // Determines whether or with what priority a SSL TCP/IP connection will be negotiated with the server for PostgreSQL.
 *             sslrootcert?: scalar|Param|null, // The name of a file containing SSL certificate authority (CA) certificate(s). If the file exists, the server's certificate will be verified to be signed by one of these authorities.
 *             sslcert?: scalar|Param|null, // The path to the SSL client certificate file for PostgreSQL.
 *             sslkey?: scalar|Param|null, // The path to the SSL client key file for PostgreSQL.
 *             sslcrl?: scalar|Param|null, // The file name of the SSL certificate revocation list for PostgreSQL.
 *             pooled?: bool|Param, // True to use a pooled server with the oci8/pdo_oracle driver
 *             MultipleActiveResultSets?: bool|Param, // Configuring MultipleActiveResultSets for the pdo_sqlsrv driver
 *             instancename?: scalar|Param|null, // Optional parameter, complete whether to add the INSTANCE_NAME parameter in the connection. It is generally used to connect to an Oracle RAC server to select the name of a particular instance.
 *             connectstring?: scalar|Param|null, // Complete Easy Connect connection descriptor, see https://docs.oracle.com/database/121/NETAG/naming.htm.When using this option, you will still need to provide the user and password parameters, but the other parameters will no longer be used. Note that when using this parameter, the getHost and getPort methods from Doctrine\DBAL\Connection will no longer function as expected.
 *             ...<string, mixed>
 *         }>,
 *     },
 *     orm?: array{
 *         default_entity_manager?: scalar|Param|null,
 *         enable_native_lazy_objects?: bool|Param, // Deprecated: The "enable_native_lazy_objects" option is deprecated and will be removed in DoctrineBundle 4.0, as native lazy objects are now always enabled. // Default: true
 *         controller_resolver?: bool|array{
 *             enabled?: bool|Param, // Resolved at compile time // Default: true
 *             auto_mapping?: bool|Param, // Deprecated: The "doctrine.orm.controller_resolver.auto_mapping.auto_mapping" option is deprecated and will be removed in DoctrineBundle 4.0, as it only accepts `false` since 3.0. // Set to true to enable using route placeholders as lookup criteria when the primary key doesn't match the argument name // Default: false
 *             evict_cache?: bool|Param, // Set to true to fetch the entity from the database instead of using the cache, if any // Default: false
 *         },
 *         entity_managers?: array<string, array{ // Default: []
 *             query_cache_driver?: Param|string|array{
 *                 type?: scalar|Param|null, // Default: null
 *                 id?: scalar|Param|null,
 *                 pool?: scalar|Param|null,
 *             },
 *             metadata_cache_driver?: Param|string|array{
 *                 type?: scalar|Param|null, // Default: null
 *                 id?: scalar|Param|null,
 *                 pool?: scalar|Param|null,
 *             },
 *             result_cache_driver?: Param|string|array{
 *                 type?: scalar|Param|null, // Default: null
 *                 id?: scalar|Param|null,
 *                 pool?: scalar|Param|null,
 *             },
 *             entity_listeners?: array{
 *                 entities?: array<string, array{ // Default: []
 *                     listeners?: array<string, array{ // Default: []
 *                         events?: list<array{ // Default: []
 *                             type?: scalar|Param|null,
 *                             method?: scalar|Param|null, // Default: null
 *                         }>,
 *                     }>,
 *                 }>,
 *                 ...<string, mixed>
 *             },
 *             connection?: scalar|Param|null,
 *             class_metadata_factory_name?: scalar|Param|null, // Default: "Doctrine\\ORM\\Mapping\\ClassMetadataFactory"
 *             default_repository_class?: scalar|Param|null, // Default: "Doctrine\\ORM\\EntityRepository"
 *             auto_mapping?: scalar|Param|null, // Default: false
 *             auto_discover_entities?: bool|Param|null, // Registers all entity classes discovered by the container scan, removing the need for explicit "mappings". When not set, enabled if neither "mappings" nor "auto_mapping" is configured and Symfony 8.2 and doctrine/orm 3.6 are available. // Default: null
 *             naming_strategy?: scalar|Param|null, // Default: "doctrine.orm.naming_strategy.default"
 *             quote_strategy?: scalar|Param|null, // Default: "doctrine.orm.quote_strategy.default"
 *             typed_field_mapper?: scalar|Param|null, // Default: "doctrine.orm.typed_field_mapper.default"
 *             entity_listener_resolver?: scalar|Param|null, // Default: null
 *             fetch_mode_subselect_batch_size?: scalar|Param|null,
 *             use_schema_editor_api?: bool|Param|null, // Set to "true" or "false" to explicitly opt in or out of the schema editor API for schema generation. Requires doctrine/dbal 4.5 or higher and doctrine/orm 3.8 or higher. // Default: null
 *             repository_factory?: scalar|Param|null, // Default: "doctrine.orm.container_repository_factory"
 *             schema_ignore_classes?: list<scalar|Param|null>,
 *             validate_xml_mapping?: bool|Param, // Set to "true" to opt-in to the new mapping driver mode that was added in Doctrine ORM 2.14 and will be mandatory in ORM 3.0. See https://github.com/doctrine/orm/pull/6728. // Default: false
 *             second_level_cache?: array{
 *                 region_cache_driver?: Param|string|array{
 *                     type?: scalar|Param|null, // Default: null
 *                     id?: scalar|Param|null,
 *                     pool?: scalar|Param|null,
 *                 },
 *                 region_lock_lifetime?: scalar|Param|null, // Default: 60
 *                 log_enabled?: bool|Param, // Default: true
 *                 region_lifetime?: scalar|Param|null, // Default: 3600
 *                 enabled?: bool|Param, // Default: true
 *                 factory?: scalar|Param|null,
 *                 regions?: array<string, array{ // Default: []
 *                     cache_driver?: Param|string|array{
 *                         type?: scalar|Param|null, // Default: null
 *                         id?: scalar|Param|null,
 *                         pool?: scalar|Param|null,
 *                     },
 *                     lock_path?: scalar|Param|null, // Default: "%kernel.cache_dir%/doctrine/orm/slc/filelock"
 *                     lock_lifetime?: scalar|Param|null, // Default: 60
 *                     type?: scalar|Param|null, // Default: "default"
 *                     lifetime?: scalar|Param|null, // Default: null
 *                     service?: scalar|Param|null,
 *                     name?: scalar|Param|null,
 *                 }>,
 *                 loggers?: array<string, array{ // Default: []
 *                     name?: scalar|Param|null,
 *                     service?: scalar|Param|null,
 *                 }>,
 *             },
 *             hydrators?: array<string, scalar|Param|null>,
 *             mappings?: array<string, Param|bool|string|array{ // Default: []
 *                 mapping?: scalar|Param|null, // Default: true
 *                 type?: scalar|Param|null,
 *                 dir?: scalar|Param|null,
 *                 alias?: scalar|Param|null, // Deprecated: The "doctrine.orm.entity_managers..mappings..alias.alias" option is deprecated and will be removed in DoctrineBundle 4.0, as Doctrine ORM no longer supports entity namespace aliases.
 *                 prefix?: scalar|Param|null,
 *                 is_bundle?: bool|Param,
 *             }>,
 *             dql?: array{
 *                 string_functions?: array<string, scalar|Param|null>,
 *                 numeric_functions?: array<string, scalar|Param|null>,
 *                 datetime_functions?: array<string, scalar|Param|null>,
 *             },
 *             filters?: array<string, Param|string|array{ // Default: []
 *                 class?: scalar|Param|null,
 *                 enabled?: bool|Param, // Default: false
 *                 parameters?: array<string, mixed>,
 *                 ...<string, mixed>
 *             }>,
 *             identity_generation_preferences?: array<string, scalar|Param|null>,
 *         }>,
 *         resolve_target_entities?: array<string, scalar|Param|null>,
 *     }|array{
 *         default_entity_manager?: scalar|Param|null,
 *         enable_native_lazy_objects?: bool|Param, // Deprecated: The "enable_native_lazy_objects" option is deprecated and will be removed in DoctrineBundle 4.0, as native lazy objects are now always enabled. // Default: true
 *         controller_resolver?: bool|array{
 *             enabled?: bool|Param, // Resolved at compile time // Default: true
 *             auto_mapping?: bool|Param, // Deprecated: The "doctrine.orm.controller_resolver.auto_mapping.auto_mapping" option is deprecated and will be removed in DoctrineBundle 4.0, as it only accepts `false` since 3.0. // Set to true to enable using route placeholders as lookup criteria when the primary key doesn't match the argument name // Default: false
 *             evict_cache?: bool|Param, // Set to true to fetch the entity from the database instead of using the cache, if any // Default: false
 *         },
 *         resolve_target_entities?: array<string, scalar|Param|null>,
 *         query_cache_driver?: Param|string|array{
 *             type?: scalar|Param|null, // Default: null
 *             id?: scalar|Param|null,
 *             pool?: scalar|Param|null,
 *         },
 *         metadata_cache_driver?: Param|string|array{
 *             type?: scalar|Param|null, // Default: null
 *             id?: scalar|Param|null,
 *             pool?: scalar|Param|null,
 *         },
 *         result_cache_driver?: Param|string|array{
 *             type?: scalar|Param|null, // Default: null
 *             id?: scalar|Param|null,
 *             pool?: scalar|Param|null,
 *         },
 *         entity_listeners?: array{
 *             entities?: array<string, array{ // Default: []
 *                 listeners?: array<string, array{ // Default: []
 *                     events?: list<array{ // Default: []
 *                         type?: scalar|Param|null,
 *                         method?: scalar|Param|null, // Default: null
 *                     }>,
 *                 }>,
 *             }>,
 *             ...<string, mixed>
 *         },
 *         connection?: scalar|Param|null,
 *         class_metadata_factory_name?: scalar|Param|null, // Default: "Doctrine\\ORM\\Mapping\\ClassMetadataFactory"
 *         default_repository_class?: scalar|Param|null, // Default: "Doctrine\\ORM\\EntityRepository"
 *         auto_mapping?: scalar|Param|null, // Default: false
 *         auto_discover_entities?: bool|Param|null, // Registers all entity classes discovered by the container scan, removing the need for explicit "mappings". When not set, enabled if neither "mappings" nor "auto_mapping" is configured and Symfony 8.2 and doctrine/orm 3.6 are available. // Default: null
 *         naming_strategy?: scalar|Param|null, // Default: "doctrine.orm.naming_strategy.default"
 *         quote_strategy?: scalar|Param|null, // Default: "doctrine.orm.quote_strategy.default"
 *         typed_field_mapper?: scalar|Param|null, // Default: "doctrine.orm.typed_field_mapper.default"
 *         entity_listener_resolver?: scalar|Param|null, // Default: null
 *         fetch_mode_subselect_batch_size?: scalar|Param|null,
 *         use_schema_editor_api?: bool|Param|null, // Set to "true" or "false" to explicitly opt in or out of the schema editor API for schema generation. Requires doctrine/dbal 4.5 or higher and doctrine/orm 3.8 or higher. // Default: null
 *         repository_factory?: scalar|Param|null, // Default: "doctrine.orm.container_repository_factory"
 *         schema_ignore_classes?: list<scalar|Param|null>,
 *         validate_xml_mapping?: bool|Param, // Set to "true" to opt-in to the new mapping driver mode that was added in Doctrine ORM 2.14 and will be mandatory in ORM 3.0. See https://github.com/doctrine/orm/pull/6728. // Default: false
 *         second_level_cache?: array{
 *             region_cache_driver?: Param|string|array{
 *                 type?: scalar|Param|null, // Default: null
 *                 id?: scalar|Param|null,
 *                 pool?: scalar|Param|null,
 *             },
 *             region_lock_lifetime?: scalar|Param|null, // Default: 60
 *             log_enabled?: bool|Param, // Default: true
 *             region_lifetime?: scalar|Param|null, // Default: 3600
 *             enabled?: bool|Param, // Default: true
 *             factory?: scalar|Param|null,
 *             regions?: array<string, array{ // Default: []
 *                 cache_driver?: Param|string|array{
 *                     type?: scalar|Param|null, // Default: null
 *                     id?: scalar|Param|null,
 *                     pool?: scalar|Param|null,
 *                 },
 *                 lock_path?: scalar|Param|null, // Default: "%kernel.cache_dir%/doctrine/orm/slc/filelock"
 *                 lock_lifetime?: scalar|Param|null, // Default: 60
 *                 type?: scalar|Param|null, // Default: "default"
 *                 lifetime?: scalar|Param|null, // Default: null
 *                 service?: scalar|Param|null,
 *                 name?: scalar|Param|null,
 *             }>,
 *             loggers?: array<string, array{ // Default: []
 *                 name?: scalar|Param|null,
 *                 service?: scalar|Param|null,
 *             }>,
 *         },
 *         hydrators?: array<string, scalar|Param|null>,
 *         mappings?: array<string, Param|bool|string|array{ // Default: []
 *             mapping?: scalar|Param|null, // Default: true
 *             type?: scalar|Param|null,
 *             dir?: scalar|Param|null,
 *             alias?: scalar|Param|null, // Deprecated: The "doctrine.orm.entity_managers..mappings..alias.alias" option is deprecated and will be removed in DoctrineBundle 4.0, as Doctrine ORM no longer supports entity namespace aliases.
 *             prefix?: scalar|Param|null,
 *             is_bundle?: bool|Param,
 *         }>,
 *         dql?: array{
 *             string_functions?: array<string, scalar|Param|null>,
 *             numeric_functions?: array<string, scalar|Param|null>,
 *             datetime_functions?: array<string, scalar|Param|null>,
 *         },
 *         filters?: array<string, Param|string|array{ // Default: []
 *             class?: scalar|Param|null,
 *             enabled?: bool|Param, // Default: false
 *             parameters?: array<string, mixed>,
 *             ...<string, mixed>
 *         }>,
 *         identity_generation_preferences?: array<string, scalar|Param|null>,
 *     },
 * }
 * @psalm-type FsSolrConfig = array{
 *     endpoints?: array<string, array{ // Default: []
 *         dsn?: scalar|Param|null,
 *         scheme?: scalar|Param|null,
 *         host?: scalar|Param|null,
 *         port?: scalar|Param|null,
 *         path?: scalar|Param|null,
 *         core?: scalar|Param|null,
 *         timeout?: scalar|Param|null,
 *         active?: bool|Param, // Default: true
 *     }>,
 *     auto_index?: bool|Param, // Default: true
 * }
 * @psalm-type TeiEditionConfig = array{
 *     public_dir?: string|Param, // Path to the public directory (default: %kernel.project_dir%/public) // Default: "%kernel.project_dir%/public"
 *     imagemagick?: array{
 *         processor?: array{
 *             path?: string|Param,
 *         },
 *     },
 *     pdf_generator?: mixed,
 *     xsl?: array{
 *         cache?: string|Param,
 *         commandline?: array{
 *             template?: string|Param,
 *         },
 *         saxon?: array{
 *             enabled?: bool|Param, // When enabled, built-in saxonc-extension will be use. // Default: false
 *         },
 *     },
 * }
 * @psalm-type PrestaSitemapConfig = array{
 *     generator?: scalar|Param|null, // Default: "presta_sitemap.generator_default"
 *     dumper?: scalar|Param|null, // Default: "presta_sitemap.dumper_default"
 *     timetolive?: int|Param, // Default: 3600
 *     sitemap_file_prefix?: scalar|Param|null, // Sets sitemap filename prefix defaults to "sitemap" -> sitemap.xml (for index); sitemap.<section>.xml(.gz) (for sitemaps) // Default: "sitemap"
 *     items_by_set?: int|Param, // The maximum number of items allowed in single sitemap. // Default: 50000
 *     route_annotation_listener?: scalar|Param|null, // Default: true
 *     dump_directory?: scalar|Param|null, // The directory to which the sitemap will be dumped. It can be either absolute, or relative (to the place where the command will be triggered). Default to Symfony's public dir. // Default: "%kernel.project_dir%/public"
 *     defaults?: array{
 *         priority?: scalar|Param|null, // Default: 0.5
 *         changefreq?: scalar|Param|null, // Default: "daily"
 *         lastmod?: scalar|Param|null, // Default: "now"
 *     },
 *     default_section?: scalar|Param|null, // The default section in which static routes are registered. // Default: "default"
 *     alternate?: bool|array{ // Automatically generate alternate (hreflang) urls with static routes. Requires route_annotation_listener config to be enabled.
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         default_locale?: scalar|Param|null, // The default locale of your routes. // Default: "en"
 *         locales?: Param|string|list<scalar|Param|null>,
 *         i18n?: "symfony"|"jms"|Param, // Strategy used to create your i18n routes. // Default: "symfony"
 *     },
 * }
 * @psalm-type DebugConfig = array{
 *     max_items?: int|Param, // Max number of displayed items past the first level, -1 means no limit. // Default: 2500
 *     min_depth?: int|Param, // Minimum tree depth to clone all the items, 1 is default. // Default: 1
 *     max_string_length?: int|Param, // Max length of displayed strings, -1 means no limit. // Default: -1
 *     dump_destination?: scalar|Param|null, // A stream URL where dumps should be written to. // Resolved at compile time // Default: null
 *     theme?: "dark"|"light"|Param, // Changes the color of the dump() output when rendered directly on the templating. "dark" (default) or "light". // Default: "dark"
 * }
 * @psalm-type MakerConfig = array{
 *     root_namespace?: scalar|Param|null, // Default: "App"
 *     generate_final_classes?: bool|Param, // Default: true
 *     generate_final_entities?: bool|Param, // Default: false
 * }
 * @psalm-type SecurityConfig = array{
 *     access_denied_url?: scalar|Param|null, // Default: null
 *     recent_authentication_lifetime?: int|Param, // Number of seconds an interactive authentication keeps granting IS_AUTHENTICATED_RECENTLY. Use it to make sensitive actions require the user to authenticate again. // Default: 7200
 *     very_recent_authentication_lifetime?: int|Param, // Number of seconds an interactive authentication keeps granting IS_AUTHENTICATED_VERY_RECENTLY, a stricter bar than IS_AUTHENTICATED_RECENTLY for the most sensitive actions. // Default: 300
 *     session_fixation_strategy?: "none"|"migrate"|"invalidate"|Param, // Default: "migrate"
 *     expose_security_errors?: value-of<\Symfony\Component\Security\Http\Authentication\ExposeSecurityLevel>|\Symfony\Component\Security\Http\Authentication\ExposeSecurityLevel|Param, // Resolved at compile time // Default: "none"
 *     erase_credentials?: bool|Param, // Deprecated: Setting the "security.erase_credentials.erase_credentials" configuration option is deprecated. It will be removed in Symfony 9.0, as the "eraseCredentials()" method was removed in Symfony 8.0. // Default: true
 *     access_decision_manager?: array{
 *         strategy?: "affirmative"|"consensus"|"unanimous"|"priority"|Param, // Resolved at compile time
 *         service?: scalar|Param|null, // Resolved at compile time
 *         strategy_service?: scalar|Param|null, // Resolved at compile time
 *         allow_if_all_abstain?: bool|Param, // Resolved at compile time // Default: false
 *         allow_if_equal_granted_denied?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     password_hashers?: array<string, Param|string|array{ // Default: []
 *         algorithm?: scalar|Param|null, // Resolved at compile time
 *         migrate_from?: Param|string|list<scalar|Param|null>,
 *         hash_algorithm?: scalar|Param|null, // Name of hashing algorithm for PBKDF2 (i.e. sha256, sha512, etc..) See hash_algos() for a list of supported algorithms. // Default: "sha512"
 *         key_length?: scalar|Param|null, // Default: 40
 *         ignore_case?: bool|Param, // Default: false
 *         encode_as_base64?: bool|Param, // Default: true
 *         iterations?: scalar|Param|null, // Default: 5000
 *         cost?: int|Param, // Defaults to the lowest value bcrypt accepts when "framework.test" is enabled. // Default: null
 *         memory_cost?: scalar|Param|null, // Defaults to the lowest value argon2 accepts when "framework.test" is enabled. // Resolved at compile time // Default: null
 *         time_cost?: scalar|Param|null, // Defaults to the lowest value argon2 accepts when "framework.test" is enabled. // Default: null
 *         id?: scalar|Param|null, // Resolved at compile time
 *     }>,
 *     providers?: array<string, array{ // Default: []
 *         id?: scalar|Param|null, // Resolved at compile time
 *         chain?: array{
 *             providers?: Param|string|list<scalar|Param|null>,
 *         },
 *         entity?: array{
 *             class?: scalar|Param|null, // The full entity class name of your user class.
 *             property?: scalar|Param|null, // Default: null
 *             manager_name?: scalar|Param|null, // Default: null
 *         },
 *         memory?: array{
 *             users?: array<string, array{ // Default: []
 *                 password?: scalar|Param|null, // Default: null
 *                 roles?: Param|string|list<scalar|Param|null>,
 *             }>,
 *         },
 *         ldap?: array{
 *             service?: scalar|Param|null, // Resolved at compile time
 *             base_dn?: scalar|Param|null,
 *             search_dn?: scalar|Param|null, // Default: null
 *             search_password?: scalar|Param|null, // Default: null
 *             extra_fields?: list<scalar|Param|null>,
 *             default_roles?: Param|string|list<scalar|Param|null>,
 *             role_fetcher?: scalar|Param|null, // Resolved at compile time // Default: null
 *             uid_key?: scalar|Param|null, // Default: "sAMAccountName"
 *             filter?: scalar|Param|null, // Default: "({uid_key}={user_identifier})"
 *             password_attribute?: scalar|Param|null, // Default: null
 *         },
 *         oidc?: array{
 *             enabled?: bool|Param, // Internal marker; the OIDC provider has no configuration options. // Default: true
 *             ...<string, mixed>
 *         },
 *     }>,
 *     firewalls?: array<string, array{ // Default: []
 *         pattern?: scalar|Param|null, // Resolved at compile time
 *         host?: scalar|Param|null,
 *         methods?: Param|string|list<scalar|Param|null>,
 *         security?: bool|Param, // Resolved at compile time // Default: true
 *         user_checker?: scalar|Param|null, // The UserChecker to use when authenticating users in this firewall. // Resolved at compile time // Default: "security.user_checker"
 *         user_checker_on_refresh?: bool|Param, // Whether to run this firewall's UserChecker again when the user is refreshed from the session, so that an account disabled during the session is rejected on the next request. It then runs on every request of this firewall, so enable it only if that checker is safe to call that often. // Resolved at compile time // Default: false
 *         request_matcher?: scalar|Param|null, // Resolved at compile time
 *         access_denied_url?: scalar|Param|null,
 *         access_denied_handler?: scalar|Param|null, // Resolved at compile time
 *         entry_point?: scalar|Param|null, // An enabled authenticator name or a service id that implements "Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface". // Resolved at compile time
 *         entry_point_path?: scalar|Param|null, // A path, an absolute URL or a route name to redirect anonymous users to when they need to authenticate.
 *         re_authentication_entry_point?: scalar|Param|null, // An enabled authenticator name or a service id implementing "Symfony\Component\Security\Http\EntryPoint\ReAuthenticationEntryPointInterface", started when the vote denying access asks for a re-authentication. Defaults to the firewall entry point when it implements this interface. // Resolved at compile time
 *         provider?: scalar|Param|null, // Resolved at compile time
 *         stateless?: bool|Param, // Resolved at compile time // Default: false
 *         lazy?: bool|Param, // Resolved at compile time // Default: false
 *         context?: scalar|Param|null, // Resolved at compile time
 *         logout?: array{
 *             enable_csrf?: bool|Param|null, // Resolved at compile time // Default: null
 *             csrf_token_id?: scalar|Param|null, // Default: "logout"
 *             csrf_parameter?: scalar|Param|null, // Default: "_csrf_token"
 *             csrf_token_manager?: scalar|Param|null, // Resolved at compile time
 *             path?: scalar|Param|null, // Resolved at compile time // Default: "/logout"
 *             target?: scalar|Param|null, // Default: "/"
 *             invalidate_session?: bool|Param, // Resolved at compile time // Default: true
 *             clear_site_data?: Param|string|list<"*"|"cache"|"cookies"|"storage"|"clientHints"|"executionContexts"|"prefetchCache"|"prerenderCache"|Param>,
 *             delete_cookies?: Param|string|array<string, array{ // Default: []
 *                 path?: scalar|Param|null, // Default: null
 *                 domain?: scalar|Param|null, // Default: null
 *                 secure?: scalar|Param|null, // Default: false
 *                 samesite?: scalar|Param|null, // Default: null
 *                 partitioned?: scalar|Param|null, // Default: false
 *             }>,
 *         },
 *         switch_user?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             parameter?: scalar|Param|null, // Default: "_switch_user"
 *             role?: scalar|Param|null, // Default: "ROLE_ALLOWED_TO_SWITCH"
 *             target_route?: scalar|Param|null, // Default: null
 *             path?: scalar|Param|null, // Restrict user switching to this path (a path or route name). Declaring the route POST-only is up to the application. The parameter is no longer read from the request headers in this mode. // Default: null
 *             enable_csrf?: bool|Param|null, // Resolved at compile time // Default: null
 *             csrf_token_id?: scalar|Param|null, // Default: "switch_user"
 *             csrf_parameter?: scalar|Param|null, // Default: "_csrf_token"
 *             csrf_token_manager?: scalar|Param|null, // Resolved at compile time
 *         },
 *         required_badges?: list<scalar|Param|null>,
 *         custom_authenticators?: list<scalar|Param|null>,
 *         login_throttling?: array{
 *             limiter?: scalar|Param|null, // A service id implementing "Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface". // Resolved at compile time
 *             max_attempts?: int|Param, // Resolved at compile time // Default: 5
 *             interval?: scalar|Param|null, // Default: "1 minute"
 *             lock_factory?: scalar|Param|null, // The service ID of the lock factory used by the login rate limiter ("auto" to use the default one when the Lock component is configured, or null to disable locking). // Resolved at compile time // Default: "auto"
 *             cache_pool?: string|Param, // The cache pool to use for storing the limiter state // Resolved at compile time // Default: "cache.rate_limiter"
 *             storage_service?: string|Param, // The service ID of a custom storage implementation, this precedes any configured "cache_pool" // Resolved at compile time // Default: null
 *         },
 *         x509?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             user?: scalar|Param|null, // Default: "SSL_CLIENT_S_DN_Email"
 *             credentials?: scalar|Param|null, // Default: "SSL_CLIENT_S_DN"
 *             user_identifier?: scalar|Param|null, // Default: "emailAddress"
 *         },
 *         remote_user?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             user?: scalar|Param|null, // Default: "REMOTE_USER"
 *         },
 *         login_link?: array{
 *             check_route?: scalar|Param|null, // Route that will validate the login link - e.g. "app_login_link_verify".
 *             check_post_only?: scalar|Param|null, // If true, only HTTP POST requests to "check_route" will be handled by the authenticator. // Default: false
 *             signature_properties?: list<scalar|Param|null>,
 *             lifetime?: int|Param, // The lifetime of the login link in seconds. // Default: 600
 *             max_uses?: int|Param, // Max number of times a login link can be used - null means unlimited within lifetime. // Default: null
 *             used_link_cache?: scalar|Param|null, // Cache service id used to expired links of max_uses is set. // Resolved at compile time
 *             success_handler?: scalar|Param|null, // A service id that implements Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface. // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // A service id that implements Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface. // Resolved at compile time
 *             provider?: scalar|Param|null, // The user provider to load users from. // Resolved at compile time
 *             secret?: Param|string|list<scalar|Param|null>,
 *             always_use_default_target_path?: bool|Param, // Default: false
 *             default_target_path?: scalar|Param|null, // Default: "/"
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             target_path_parameter?: scalar|Param|null, // Default: "_target_path"
 *             use_referer?: bool|Param, // Default: false
 *             failure_path?: scalar|Param|null, // Default: null
 *             failure_forward?: bool|Param, // Default: false
 *             failure_path_parameter?: scalar|Param|null, // Default: "_failure_path"
 *         },
 *         oidc_login?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..oidc_login.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             check_path?: scalar|Param|null, // The firewall path where the OIDC provider redirects after authentication. Must match a redirect URI registered with the provider. A route is declared for this path by the "security.route_loader" service, which the application must import. A route name is accepted too, in which case no route is declared for it. // Resolved at compile time // Default: "/oidc/callback"
 *             use_forward?: bool|Param, // Resolved at compile time // Default: false
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             always_use_default_target_path?: bool|Param, // Default: false
 *             default_target_path?: scalar|Param|null, // Default: "/"
 *             target_path_parameter?: scalar|Param|null, // Default: "_target_path"
 *             use_referer?: bool|Param, // Default: false
 *             failure_path?: scalar|Param|null, // Default: null
 *             failure_forward?: bool|Param, // Default: false
 *             failure_path_parameter?: scalar|Param|null, // Default: "_failure_path"
 *             provider_uri?: scalar|Param|null, // The OIDC Issuer URL (e.g. "https://accounts.example.com"). Used for .well-known/openid-configuration discovery unless "discovery_uri" is set.
 *             discovery_uri?: scalar|Param|null, // Absolute URL of the discovery document. The "issuer" it announces is still checked against "provider_uri". // Default: null
 *             http_client?: scalar|Param|null, // The id of the HttpClient service every call to the provider is made with: discovery, JWKS, token and UserInfo endpoints. Defaults to "http_client". A scoped client must scope the discovery host and every host the provider announces. // Resolved at compile time // Default: null
 *             client_id?: scalar|Param|null, // The OIDC client identifier.
 *             client_certificate?: Param|string|array{ // The TLS client certificate presented to the token and UserInfo endpoints.
 *                 certificate?: scalar|Param|null, // Path to the PEM file of the certificate.
 *                 key?: scalar|Param|null, // Path to the PEM file of the private key, when not in the certificate file. // Default: null
 *                 passphrase?: scalar|Param|null, // Passphrase of the private key. // Default: null
 *             },
 *             client_authentication?: Param|string|array{ // How the client authenticates at the token endpoint, which RFC 7591, Section 2 names in its "token_endpoint_auth_method" metadata. Set the method Symfony ships with its parameters, or the id of a service implementing "Symfony\Component\Security\Http\OAuth2\ClientAuthentication\ClientAuthenticationInterface" for a scheme it does not. Exactly one of them.
 *                 client_secret_basic?: scalar|Param|null, // Send the client secret as HTTP Basic credentials, the "client_secret_basic" method of RFC 6749, Section 2.3.1, which the RFC recommends. Takes the client secret.
 *                 client_secret_post?: scalar|Param|null, // Send the client secret in the body of the token request, the "client_secret_post" method of RFC 6749, Section 2.3.1. Takes the client secret. Use it for the providers that support nothing else.
 *                 none?: bool|Param, // Declare a public client (a SPA, a mobile or a native application), which holds no secret and relies on PKCE to protect the code exchange. It can disable neither PKCE nor the ID token signature check.
 *                 client_secret_jwt?: Param|string|array{ // Authenticate with a JWT assertion keyed with the client secret, the "client_secret_jwt" method of OIDC Core 1.0, Section 9. The secret keys an HMAC and is never sent, but the provider holds it too and could sign an assertion in the name of the client: prefer "private_key_jwt", which nobody but the client can sign. Takes the client secret, or a mapping to also set "algorithm" and "lifetime".
 *                     secret?: scalar|Param|null, // The client secret, whose octets key the HMAC. It must be at least as long as the digest the algorithm produces, which RFC 7518, Section 3.2 requires and the algorithm itself checks: 32 bytes for "HS256", 48 for "HS384", 64 for "HS512".
 *                     algorithm?: "HS256"|"HS384"|"HS512"|Param, // The MAC algorithm the assertion is signed with, which must be one your provider announces in "token_endpoint_auth_signing_alg_values_supported". // Default: "HS256"
 *                     lifetime?: int|Param, // How long an assertion is valid, in seconds. It is built for one request and sent right away, so keep it short: it is the window a provider that does not track the "jti" would accept a captured assertion in. // Default: 60
 *                     audience?: "issuer"|"token_endpoint"|Param, // The audience of the assertion: the issuer of the provider, or its token endpoint for a provider that refuses the issuer. // Resolved at compile time // Default: "issuer"
 *                 },
 *                 private_key_jwt?: Param|string|array{ // Authenticate with a JWT assertion signed with the private key of the client, the "private_key_jwt" method of OIDC Core 1.0, Section 9, and the one FAPI 2.0 asks for. The provider only holds the public half, registered as the client "jwks" or fetched from its "jwks_uri", so it learns nothing it could authenticate as the client with.
 *                     key?: scalar|Param|null, // JSON-encoded JWK of the private key the assertion is signed with. Give it a "kid" when the client publishes several keys, so that the provider knows which one verifies the signature without trying them all.
 *                     algorithm?: "RS256"|"RS384"|"RS512"|"ES256"|"ES384"|"ES512"|"PS256"|"PS384"|"PS512"|Param, // The signature algorithm the assertion is signed with, which must be one your provider announces in "token_endpoint_auth_signing_alg_values_supported". FAPI 2.0 asks for "PS256" or "ES256". // Default: "RS256"
 *                     lifetime?: int|Param, // How long an assertion is valid, in seconds. It is built for one request and sent right away, so keep it short: it is the window a provider that does not track the "jti" would accept a captured assertion in. // Default: 60
 *                     audience?: "issuer"|"token_endpoint"|Param, // The audience of the assertion: the issuer of the provider, or its token endpoint for a provider that refuses the issuer. // Resolved at compile time // Default: "issuer"
 *                 },
 *                 tls_client_auth?: bool|Param, // Authenticate with "client_certificate", issued by a certificate authority.
 *                 self_signed_tls_client_auth?: bool|Param, // Authenticate with "client_certificate", self-signed.
 *                 id?: scalar|Param|null, // The id of a service implementing "ClientAuthenticationInterface", for a scheme Symfony does not ship. The method it reports is only known once it is built, so the rules a public client cannot bend are then checked when a login starts on this firewall instead of while the container compiles. // Resolved at compile time
 *             },
 *             dpop?: Param|string|array{ // Binds the tokens the provider issues to a key held by this client (DPoP); a token the provider did not bind is refused.
 *                 key?: scalar|Param|null, // The private key the proofs are signed with, as a JSON-encoded JWK.
 *                 algorithm?: "ES256"|"ES384"|"ES512"|"PS256"|"PS384"|"PS512"|"RS256"|"RS384"|"RS512"|Param, // The algorithm the proofs are signed with, among the "dpop_signing_alg_values_supported" of the provider. // Default: "ES256"
 *             },
 *             scope?: list<scalar|Param|null>,
 *             start_path?: scalar|Param|null, // The path where the route loader declares a route that starts the flow by redirecting to the provider; link to it e.g. from the login page of a firewall offering several ways to log in. A route name is accepted too, in which case no route is declared for it. // Resolved at compile time // Default: "/oidc/start"
 *             discovery_cache_ttl?: int|Param, // TTL in seconds for caching the OIDC discovery configuration, and for the provider JWKS when it advertises no cache lifetime itself. // Default: 3600
 *             allowed_time_drift?: int|Param, // Allowed clock skew in seconds when validating ID token time claims. // Default: 0
 *             user_data_source?: "userinfo"|"id_token"|Param, // Where the user claims are read from: "userinfo" (default) fetches them from the UserInfo endpoint; "id_token" reads them from the validated ID token instead, for providers that put the requested claims there, some of which expose no UserInfo endpoint at all, which is then not required to be announced. // Resolved at compile time // Default: "userinfo"
 *             user_identifier_claim?: scalar|Param|null, // The claim the user identifier is read from. "sub" (default) is the only claim OIDC guarantees stable and unique for the user. Only pick another claim, e.g. "email", when the provider guarantees its value unique, verified and stable too: whoever controls the value of that claim at the provider owns the matching account here. // Default: "sub"
 *             id_token_signature?: array{
 *                 required?: bool|Param, // When true (default), the ID token signature is verified against the provider JWKS. Setting it to false decodes the ID token without verifying it, which OIDC Core 1.0, Section 3.1.3.7, item 6 only allows because the token comes from the token endpoint over TLS: it is then only as safe as the TLS verification of the HTTP client used for that request, so never turn it off with a client configured with "verify_peer: false" or "verify_host: false", nor behind a TLS-terminating proxy. A public client, whose "client_authentication" reports the "none" method, cannot turn it off at all. // Resolved at compile time // Default: true
 *                 algorithms?: list<scalar|Param|null>,
 *                 enforce_key_usage_verification?: bool|Param, // When enabled (default), only keys explicitly designated for signature (via "use":"sig" or a "key_ops" entry containing "sign"/"verify") are accepted. When disabled, keys without any usage designation are also accepted; keys explicitly restricted to encryption are still rejected. // Default: true
 *             },
 *             pkce?: array{
 *                 enabled?: bool|Param, // Whether to use PKCE (Proof Key for Code Exchange, RFC 7636), which any current provider should support; only disable it for one that rejects the "code_challenge" parameter. A public client, whose "client_authentication" reports the "none" method, cannot disable it at all. // Default: true
 *                 method?: "S256"|"plain"|Param, // The PKCE code challenge method. RFC 7636, Section 4.2 mandates "S256" for every client able to compute it, so only ever pick "plain" for a provider that supports nothing else. // Default: "S256"
 *             },
 *             max_age?: int|Param, // Maximum elapsed seconds since the end-user authentication, sent as the "max_age" authorization parameter; the ID token must then carry an "auth_time" claim, which is checked against this value, "allowed_time_drift" included.
 *             authorization_params?: array<string, scalar|Param|null>,
 *             refresh_access_token?: bool|array{ // Renew the access token with the refresh token grant of RFC 6749, Section 6, so that it stays usable to call an API on behalf of the logged-in user. The provider only issues a refresh token when it was asked for one, e.g. with the "offline_access" scope, and the renewal needs the "expires_in" it is optional for the provider to report. Whether this is enabled or not, the tokens are held as the "oauth2_refresh_token", "oauth2_access_token" and "oauth2_access_token_expires_at" attributes of the security token, and the "security.authenticator.oidc_login.token_refresher.<firewall>" service renews them on demand. A provider rotating refresh tokens expects the previous one never to be replayed, which a session handler locking the session guarantees, and the default one does.
 *                 enabled?: bool|Param, // Resolved at compile time // Default: false
 *                 leeway?: int|Param, // How many seconds before its expiry the access token is renewed, so that one handed to a call in flight does not expire on the way. // Default: 30
 *             },
 *             enable_end_session?: bool|Param, // Enable RP-Initiated Logout via the OIDC end_session_endpoint. // Resolved at compile time // Default: false
 *             post_logout_redirect_path?: scalar|Param|null, // Path or route to redirect to after OIDC logout. // Default: "/"
 *             backchannel_logout?: bool|array{ // Accept the logout tokens the OIDC provider posts when one of its sessions ends.
 *                 enabled?: bool|Param, // Resolved at compile time // Default: false
 *                 path?: scalar|Param|null, // Path where the OIDC provider posts its logout tokens. // Resolved at compile time // Default: "/oidc/backchannel-logout"
 *                 cache?: scalar|Param|null, // Id of the cache pool remembering the ended provider sessions, shared by every server of the application. // Resolved at compile time // Default: "cache.security"
 *                 lifetime?: int|Param, // How long an ended provider session is remembered, in seconds; at least how long a session can stay idle. // Default: 86400
 *             },
 *         },
 *         form_login?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..form_login.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             check_path?: scalar|Param|null, // Resolved at compile time // Default: "/login_check"
 *             use_forward?: bool|Param, // Resolved at compile time // Default: false
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             username_parameter?: scalar|Param|null, // Default: "_username"
 *             password_parameter?: scalar|Param|null, // Default: "_password"
 *             csrf_parameter?: scalar|Param|null, // Default: "_csrf_token"
 *             csrf_token_id?: scalar|Param|null, // Default: "authenticate"
 *             enable_csrf?: bool|Param, // Default: false
 *             post_only?: bool|Param, // Default: true
 *             form_only?: bool|Param, // Default: false
 *             always_use_default_target_path?: bool|Param, // Default: false
 *             default_target_path?: scalar|Param|null, // Default: "/"
 *             target_path_parameter?: scalar|Param|null, // Default: "_target_path"
 *             use_referer?: bool|Param, // Default: false
 *             failure_path?: scalar|Param|null, // Default: null
 *             failure_forward?: bool|Param, // Default: false
 *             failure_path_parameter?: scalar|Param|null, // Default: "_failure_path"
 *         },
 *         form_login_ldap?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..form_login_ldap.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             check_path?: scalar|Param|null, // Resolved at compile time // Default: "/login_check"
 *             use_forward?: bool|Param, // Resolved at compile time // Default: false
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             username_parameter?: scalar|Param|null, // Default: "_username"
 *             password_parameter?: scalar|Param|null, // Default: "_password"
 *             csrf_parameter?: scalar|Param|null, // Default: "_csrf_token"
 *             csrf_token_id?: scalar|Param|null, // Default: "authenticate"
 *             enable_csrf?: bool|Param, // Default: false
 *             post_only?: bool|Param, // Default: true
 *             form_only?: bool|Param, // Default: false
 *             always_use_default_target_path?: bool|Param, // Default: false
 *             default_target_path?: scalar|Param|null, // Default: "/"
 *             target_path_parameter?: scalar|Param|null, // Default: "_target_path"
 *             use_referer?: bool|Param, // Default: false
 *             failure_path?: scalar|Param|null, // Default: null
 *             failure_forward?: bool|Param, // Default: false
 *             failure_path_parameter?: scalar|Param|null, // Default: "_failure_path"
 *             service?: scalar|Param|null, // Resolved at compile time // Default: "ldap"
 *             dn_string?: scalar|Param|null, // Default: "{user_identifier}"
 *             query_string?: scalar|Param|null,
 *             search_dn?: scalar|Param|null, // Default: ""
 *             search_password?: scalar|Param|null, // Default: ""
 *             ldap_users_only?: bool|Param, // Only bind users of class "Symfony\Component\Ldap\Security\LdapUser" against the LDAP server, and leave any other user to the regular password checker. // Resolved at compile time // Default: false
 *         },
 *         json_login?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..json_login.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             check_path?: scalar|Param|null, // Resolved at compile time // Default: "/login_check"
 *             use_forward?: bool|Param, // Resolved at compile time // Default: false
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             username_path?: scalar|Param|null, // Default: "username"
 *             password_path?: scalar|Param|null, // Default: "password"
 *         },
 *         json_login_ldap?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..json_login_ldap.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             check_path?: scalar|Param|null, // Resolved at compile time // Default: "/login_check"
 *             use_forward?: bool|Param, // Resolved at compile time // Default: false
 *             login_path?: scalar|Param|null, // Default: "/login"
 *             username_path?: scalar|Param|null, // Default: "username"
 *             password_path?: scalar|Param|null, // Default: "password"
 *             service?: scalar|Param|null, // Resolved at compile time // Default: "ldap"
 *             dn_string?: scalar|Param|null, // Default: "{user_identifier}"
 *             query_string?: scalar|Param|null,
 *             search_dn?: scalar|Param|null, // Default: ""
 *             search_password?: scalar|Param|null, // Default: ""
 *             ldap_users_only?: bool|Param, // Only bind users of class "Symfony\Component\Ldap\Security\LdapUser" against the LDAP server, and leave any other user to the regular password checker. // Resolved at compile time // Default: false
 *         },
 *         access_token?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             remember_me?: bool|Param, // Deprecated: Setting the "security.firewalls..access_token.remember_me.remember_me" configuration option has no effect and is deprecated. It will be removed in Symfony 9.0. // Default: true
 *             success_handler?: scalar|Param|null, // Resolved at compile time
 *             failure_handler?: scalar|Param|null, // Resolved at compile time
 *             realm?: scalar|Param|null, // Default: null
 *             token_extractors?: Param|string|list<scalar|Param|null>,
 *             token_handler?: Param|string|array{
 *                 id?: scalar|Param|null, // Resolved at compile time
 *                 oidc_user_info?: Param|string|array{
 *                     base_uri?: scalar|Param|null, // Base URI of the userinfo endpoint on the OIDC server, or the OIDC server URI to use the discovery (require "discovery" to be configured). The latter must end with a slash when it has a path, as the discovery path is resolved against it as a relative URL.
 *                     discovery?: array{ // Enable the OIDC discovery.
 *                         cache?: array{
 *                             id?: scalar|Param|null, // Cache service id to use to cache the OIDC discovery configuration. // Resolved at compile time // Default: "cache.security.discovery"
 *                         },
 *                     },
 *                     claim?: scalar|Param|null, // Claim which contains the user identifier (e.g. sub, email, etc.). // Default: "sub"
 *                     client?: scalar|Param|null, // HttpClient service id to use to call the OIDC server. // Resolved at compile time
 *                 },
 *                 oidc?: array{
 *                     discovery?: array{ // Enable the OIDC discovery.
 *                         base_uri?: Param|string|list<scalar|Param|null>,
 *                         cache?: array{
 *                             id?: scalar|Param|null, // Cache service id to use to cache the OIDC discovery configuration. // Resolved at compile time // Default: "cache.security.discovery"
 *                         },
 *                         enforce_key_usage_verification?: bool|Param, // When enabled (default), only keys explicitly designated for signature (via "use":"sig" or a "key_ops" entry containing "sign"/"verify") are accepted. When disabled, keys without any usage designation are also accepted; keys explicitly restricted to encryption are still rejected. // Default: true
 *                         check_issuer?: bool|null|array<string, string|Param>,
 *                     },
 *                     claim?: scalar|Param|null, // Claim which contains the user identifier (e.g.: sub, email..). // Default: "sub"
 *                     audience?: Param|string|list<scalar|Param|null>,
 *                     issuers?: list<scalar|Param|null>,
 *                     algorithms?: list<scalar|Param|null>,
 *                     keyset?: scalar|Param|null, // JSON-encoded JWKSet used to sign the token (must contain a list of valid public keys).
 *                     encryption?: bool|array{
 *                         enabled?: bool|Param, // Resolved at compile time // Default: false
 *                         enforce?: bool|Param, // When enabled, the token shall be encrypted. // Default: false
 *                         algorithms?: list<scalar|Param|null>,
 *                         keyset?: scalar|Param|null, // JSON-encoded JWKSet used to decrypt the token (must contain a list of valid private keys).
 *                     },
 *                     allowed_time_drift?: int|Param, // Allowed time drift in seconds for token validation (iat, nbf, exp claims). // Default: 0
 *                     enforce_at_jwt_type?: bool|Param|null, // When enabled, the "typ" header of the token must be "at+jwt" or "application/at+jwt", as RFC 9068 requires from a JWT access token. This rejects the ID tokens issued for the same audience. Disable it only for providers that do not follow the profile. Defaults to false in 8.2 and to true as of 9.0. // Default: null
 *                 },
 *                 cas?: array{
 *                     validation_url?: scalar|Param|null, // CAS server validation URL
 *                     prefix?: scalar|Param|null, // CAS prefix // Default: "cas"
 *                     http_client?: scalar|Param|null, // HTTP Client service // Resolved at compile time // Default: null
 *                 },
 *                 oauth2?: Param|string|array{
 *                     http_client?: scalar|Param|null, // HttpClient service id the introspection endpoint is called with. Declare it as a scoped client whose "base_uri" is the introspection endpoint of your authorization server and whose "auth_basic" holds the credentials it authenticates with. Those are sent as given, where the "client_secret_basic" of RFC 6749 §2.3.1 form-urlencodes both halves, so encode a client id or a secret holding a colon, a plus or a space yourself. // Resolved at compile time
 *                     audience?: Param|string|list<scalar|Param|null>,
 *                     issuer?: scalar|Param|null, // Identifier of the authorization server, checked against the "iss" of the introspection response. // Default: null
 *                     claim?: scalar|Param|null, // Claim which contains the user identifier (e.g.: sub, username, email...). Defaults to "sub", falling back to "username". // Default: null
 *                     allowed_time_drift?: int|Param, // Allowed time drift in seconds when validating the "iat", "nbf" and "exp" of the introspection response. // Default: 0
 *                     cache?: array{ // Cache the introspection responses of active tokens, never beyond their "exp".
 *                         id?: scalar|Param|null, // Cache service id to use to cache the introspection responses. // Resolved at compile time
 *                         ttl?: int|Param, // Maximum lifetime in seconds of a cached introspection response. The shorter it is, the sooner a revoked token stops being accepted. // Default: 60
 *                     },
 *                     response_signature?: bool|array{ // Ask the authorization server for a signed introspection response (RFC 9701) and verify it.
 *                         enabled?: bool|Param, // Resolved at compile time // Default: false
 *                         enforce?: bool|Param, // When enabled (default), a plain JSON introspection response is refused. // Default: true
 *                         algorithms?: list<scalar|Param|null>,
 *                         discovery?: bool|array{ // Read the keys the introspection response is verified against from the RFC 8414 metadata of the authorization server, whose URL is derived from the "issuer" this handler already declares. Only the "jwks_uri" is read from it: which algorithms are accepted stays declared here, so that an authorization server cannot widen it by announcing more.
 *                             enabled?: bool|Param, // Resolved at compile time // Default: false
 *                             cache?: array{
 *                                 id?: scalar|Param|null, // Cache service id the metadata document and the keys it points at are stored in. // Resolved at compile time // Default: "cache.security.discovery"
 *                             },
 *                         },
 *                         keyset?: scalar|Param|null, // JSON-encoded JWKSet holding the public keys of your authorization server, the ones it announces at its "jwks_uri", which the introspection response is verified against. // Default: null
 *                     },
 *                 },
 *             },
 *             resource_metadata?: array{ // Declaring this node serves the RFC 9728 protected resource metadata document of the firewall at "/.well-known/oauth-protected-resource" and advertises its URL in the "resource_metadata" parameter of the "WWW-Authenticate" header, which is how a client discovers where to get a token this firewall accepts. The route is declared by the "security.route_loader" service, which the application must import. Make sure the route is reachable without a token.
 *                 resource?: scalar|Param|null, // The resource identifier of this firewall: an HTTPS URL without a fragment (e.g. "https://example.com/api"), read when the container is compiled, or a path (e.g. "/api") resolved against the origin of the request. Its path is inserted after the well-known path, as RFC 9728, Section 3.1 prescribes. Defaults to the origin of the request, which is what a firewall covering a whole application wants. // Resolved at compile time // Default: null
 *                 authorization_servers?: Param|string|list<scalar|Param|null>,
 *                 jwks_uri?: scalar|Param|null, // URL of the JWK Set holding the keys this resource signs its own responses with. Unrelated to the keys the access tokens are verified against, which belong to the authorization server. // Default: null
 *                 scopes_supported?: Param|string|list<scalar|Param|null>,
 *                 bearer_methods_supported?: Param|string|list<"header"|"body"|"query"|Param>,
 *                 resource_name?: scalar|Param|null, // Human-readable name of this resource, meant to be displayed to the end user. // Default: null
 *                 resource_documentation?: scalar|Param|null, // URL of the developer documentation of this resource. // Default: null
 *                 resource_policy_uri?: scalar|Param|null, // URL of the policy telling how the client may use the data this resource exposes. // Default: null
 *                 resource_tos_uri?: scalar|Param|null, // URL of the terms of service of this resource. // Default: null
 *             },
 *             dpop?: bool|array{ // Accepts only the access tokens bound to a key the request proves it holds (DPoP), presented under the "DPoP" scheme.
 *                 enabled?: bool|Param, // Resolved at compile time // Default: false
 *                 algorithms?: list<scalar|Param|null>,
 *                 cache?: scalar|Param|null, // The cache pool proofs are remembered in to refuse a replay, shared by all the instances of the application. // Resolved at compile time // Default: "cache.security"
 *                 proof_lifetime?: int|Param, // How long a proof is accepted after its "iat", in seconds. // Default: 60
 *                 allowed_time_drift?: int|Param, // Allowed time drift in seconds for the "iat" of a proof, both ways. // Default: 5
 *             },
 *         },
 *         http_basic?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             realm?: scalar|Param|null, // Default: "Secured Area"
 *         },
 *         http_basic_ldap?: array{
 *             provider?: scalar|Param|null, // Resolved at compile time
 *             realm?: scalar|Param|null, // Default: "Secured Area"
 *             service?: scalar|Param|null, // Resolved at compile time // Default: "ldap"
 *             dn_string?: scalar|Param|null, // Default: "{user_identifier}"
 *             query_string?: scalar|Param|null,
 *             search_dn?: scalar|Param|null, // Default: ""
 *             search_password?: scalar|Param|null, // Default: ""
 *             ldap_users_only?: bool|Param, // Only bind users of class "Symfony\Component\Ldap\Security\LdapUser" against the LDAP server, and leave any other user to the regular password checker. // Resolved at compile time // Default: false
 *         },
 *         remember_me?: array{
 *             secret?: Param|string|list<scalar|Param|null>,
 *             service?: scalar|Param|null, // Resolved at compile time
 *             user_providers?: Param|string|list<scalar|Param|null>,
 *             catch_exceptions?: bool|Param, // Default: true
 *             signature_properties?: list<scalar|Param|null>,
 *             token_provider?: Param|string|array{
 *                 service?: scalar|Param|null, // The service ID of a custom remember-me token provider. // Resolved at compile time
 *                 doctrine?: bool|array{
 *                     enabled?: bool|Param, // Resolved at compile time // Default: false
 *                     connection?: scalar|Param|null, // Resolved at compile time // Default: null
 *                 },
 *             },
 *             token_verifier?: scalar|Param|null, // The service ID of a custom rememberme token verifier. // Resolved at compile time
 *             name?: scalar|Param|null, // Default: "REMEMBERME"
 *             lifetime?: int|Param, // Default: 31536000
 *             path?: scalar|Param|null, // Default: "/"
 *             domain?: scalar|Param|null, // Default: null
 *             secure?: true|false|"auto"|Param, // Defaults to the value of "framework.session.cookie_secure", or to "auto". // Resolved at compile time
 *             httponly?: bool|Param, // Default: true
 *             samesite?: null|"lax"|"strict"|"none"|Param, // Defaults to the value of "framework.session.cookie_samesite", or to "lax".
 *             always_remember_me?: bool|Param, // Default: false
 *             remember_me_parameter?: scalar|Param|null, // Default: "_remember_me"
 *         },
 *     }>,
 *     access_control?: list<array{ // Default: []
 *         request_matcher?: scalar|Param|null, // Resolved at compile time // Default: null
 *         requires_channel?: scalar|Param|null, // Default: null
 *         path?: scalar|Param|null, // Use the urldecoded format. // Default: null
 *         host?: scalar|Param|null, // Default: null
 *         port?: int|Param, // Resolved at compile time // Default: null
 *         ips?: Param|string|list<scalar|Param|null>,
 *         attributes?: array<string, scalar|Param|null>,
 *         route?: scalar|Param|null, // Default: null
 *         methods?: Param|string|list<scalar|Param|null>,
 *         allow_if?: scalar|Param|null, // Default: null
 *         roles?: Param|string|list<scalar|Param|null>,
 *     }>,
 *     role_hierarchy?: array<string, Param|string|list<scalar|Param|null>>,
 * }
 * @psalm-type WebProfilerConfig = array{
 *     toolbar?: bool|array{ // Profiler toolbar configuration
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *         ajax_replace?: bool|Param, // Replace toolbar on AJAX requests // Default: false
 *     },
 *     intercept_redirects?: bool|Param, // Resolved at compile time // Default: false
 *     excluded_ajax_paths?: scalar|Param|null, // Default: "^/((index|app(_[\\w]+)?)\\.php/)?_wdt"
 * }
 * @psalm-type TwigExtraConfig = array{
 *     cache?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     html?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     markdown?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     intl?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     cssinliner?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     inky?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: false
 *     },
 *     string?: bool|array{
 *         enabled?: bool|Param, // Resolved at compile time // Default: true
 *     },
 *     commonmark?: array{
 *         renderer?: array{ // Array of options for rendering HTML.
 *             block_separator?: scalar|Param|null,
 *             inner_separator?: scalar|Param|null,
 *             soft_break?: scalar|Param|null,
 *         },
 *         html_input?: "strip"|"allow"|"escape"|Param, // How to handle HTML input.
 *         allow_unsafe_links?: bool|Param, // Remove risky link and image URLs by setting this to false. // Default: true
 *         max_nesting_level?: int|Param, // The maximum nesting level for blocks. // Default: 9223372036854775807
 *         max_delimiters_per_line?: int|Param, // The maximum number of strong/emphasis delimiters per line. // Default: 9223372036854775807
 *         slug_normalizer?: array{ // Array of options for configuring how URL-safe slugs are created.
 *             instance?: mixed,
 *             max_length?: int|Param, // Default: 255
 *             unique?: mixed,
 *         },
 *         commonmark?: array{ // Array of options for configuring the CommonMark core extension.
 *             enable_em?: bool|Param, // Default: true
 *             enable_strong?: bool|Param, // Default: true
 *             use_asterisk?: bool|Param, // Default: true
 *             use_underscore?: bool|Param, // Default: true
 *             unordered_list_markers?: list<scalar|Param|null>,
 *         },
 *         ...<string, mixed>
 *     },
 * }
 * @psalm-type CocurSlugifyConfig = array{
 *     lowercase?: bool|Param,
 *     lowercase_after_regexp?: bool|Param,
 *     trim?: bool|Param,
 *     strip_tags?: bool|Param,
 *     separator?: scalar|Param|null,
 *     regexp?: scalar|Param|null,
 *     rulesets?: list<scalar|Param|null>,
 * }
 * @psalm-type JmsI18nRoutingConfig = array{
 *     default_locale?: scalar|Param|null,
 *     locales?: Param|string|list<scalar|Param|null>,
 *     catalogue?: scalar|Param|null, // Default: "routes"
 *     strategy?: scalar|Param|null, // Default: "custom"
 *     prefix_with_locale?: bool|Param, // Default: false
 *     omit_prefix_when_default?: bool|Param, // Default: true
 *     hosts?: array<string, scalar|Param|null>,
 *     redirect_to_host?: bool|Param, // Default: true
 *     use_cookie?: bool|Param, // DEPRECATED! Please use: cookie.enabled // Default: true
 *     cookie?: array{
 *         enabled?: bool|Param, // Default: true
 *         name?: scalar|Param|null, // Default: "hl"
 *         lifetime?: scalar|Param|null, // Default: 31536000
 *         path?: scalar|Param|null, // Default: null
 *         domain?: scalar|Param|null, // Default: null
 *         secure?: bool|Param, // Default: false
 *         httponly?: bool|Param, // Default: false
 *     },
 *     ...<string, mixed>
 * }
 * @psalm-type ConfigType = array{
 *     imports?: ImportsConfig,
 *     parameters?: ParametersConfig,
 *     services?: ServicesConfig,
 *     router?: RouterConfig,
 *     cache?: CacheConfig,
 *     asset?: AssetConfig,
 *     serializer?: SerializerConfig,
 *     validation?: ValidationConfig,
 *     translation?: TranslationConfig,
 *     type_info?: TypeInfoConfig,
 *     property_access?: PropertyAccessConfig,
 *     property_info?: PropertyInfoConfig,
 *     framework?: FrameworkConfig,
 *     scssphp?: ScssphpConfig,
 *     eko_feed?: EkoFeedConfig,
 *     twig?: TwigConfig,
 *     sylius_theme?: SyliusThemeConfig,
 *     stof_doctrine_extensions?: StofDoctrineExtensionsConfig,
 *     liip_url_auto_converter?: LiipUrlAutoConverterConfig,
 *     knp_paginator?: KnpPaginatorConfig,
 *     knp_menu?: KnpMenuConfig,
 *     jms_translation?: JmsTranslationConfig,
 *     doctrine?: DoctrineConfig,
 *     fs_solr?: FsSolrConfig,
 *     tei_edition?: TeiEditionConfig,
 *     presta_sitemap?: PrestaSitemapConfig,
 *     security?: SecurityConfig,
 *     twig_extra?: TwigExtraConfig,
 *     cocur_slugify?: CocurSlugifyConfig,
 *     jms_i18n_routing?: JmsI18nRoutingConfig,
 *     "when@dev"?: array{
 *         imports?: ImportsConfig,
 *         parameters?: ParametersConfig,
 *         services?: ServicesConfig,
 *         router?: RouterConfig,
 *         cache?: CacheConfig,
 *         asset?: AssetConfig,
 *         serializer?: SerializerConfig,
 *         validation?: ValidationConfig,
 *         translation?: TranslationConfig,
 *         type_info?: TypeInfoConfig,
 *         property_access?: PropertyAccessConfig,
 *         property_info?: PropertyInfoConfig,
 *         framework?: FrameworkConfig,
 *         scssphp?: ScssphpConfig,
 *         eko_feed?: EkoFeedConfig,
 *         twig?: TwigConfig,
 *         sylius_theme?: SyliusThemeConfig,
 *         stof_doctrine_extensions?: StofDoctrineExtensionsConfig,
 *         liip_url_auto_converter?: LiipUrlAutoConverterConfig,
 *         knp_paginator?: KnpPaginatorConfig,
 *         knp_menu?: KnpMenuConfig,
 *         jms_translation?: JmsTranslationConfig,
 *         doctrine?: DoctrineConfig,
 *         fs_solr?: FsSolrConfig,
 *         tei_edition?: TeiEditionConfig,
 *         presta_sitemap?: PrestaSitemapConfig,
 *         debug?: DebugConfig,
 *         maker?: MakerConfig,
 *         security?: SecurityConfig,
 *         web_profiler?: WebProfilerConfig,
 *         twig_extra?: TwigExtraConfig,
 *         cocur_slugify?: CocurSlugifyConfig,
 *         jms_i18n_routing?: JmsI18nRoutingConfig,
 *     },
 *     "when@prod"?: array{
 *         imports?: ImportsConfig,
 *         parameters?: ParametersConfig,
 *         services?: ServicesConfig,
 *         router?: RouterConfig,
 *         cache?: CacheConfig,
 *         asset?: AssetConfig,
 *         serializer?: SerializerConfig,
 *         validation?: ValidationConfig,
 *         translation?: TranslationConfig,
 *         type_info?: TypeInfoConfig,
 *         property_access?: PropertyAccessConfig,
 *         property_info?: PropertyInfoConfig,
 *         framework?: FrameworkConfig,
 *         scssphp?: ScssphpConfig,
 *         eko_feed?: EkoFeedConfig,
 *         twig?: TwigConfig,
 *         sylius_theme?: SyliusThemeConfig,
 *         stof_doctrine_extensions?: StofDoctrineExtensionsConfig,
 *         liip_url_auto_converter?: LiipUrlAutoConverterConfig,
 *         knp_paginator?: KnpPaginatorConfig,
 *         knp_menu?: KnpMenuConfig,
 *         jms_translation?: JmsTranslationConfig,
 *         doctrine?: DoctrineConfig,
 *         fs_solr?: FsSolrConfig,
 *         tei_edition?: TeiEditionConfig,
 *         presta_sitemap?: PrestaSitemapConfig,
 *         security?: SecurityConfig,
 *         twig_extra?: TwigExtraConfig,
 *         cocur_slugify?: CocurSlugifyConfig,
 *         jms_i18n_routing?: JmsI18nRoutingConfig,
 *     },
 *     "when@test"?: array{
 *         imports?: ImportsConfig,
 *         parameters?: ParametersConfig,
 *         services?: ServicesConfig,
 *         router?: RouterConfig,
 *         cache?: CacheConfig,
 *         asset?: AssetConfig,
 *         serializer?: SerializerConfig,
 *         validation?: ValidationConfig,
 *         translation?: TranslationConfig,
 *         type_info?: TypeInfoConfig,
 *         property_access?: PropertyAccessConfig,
 *         property_info?: PropertyInfoConfig,
 *         framework?: FrameworkConfig,
 *         scssphp?: ScssphpConfig,
 *         eko_feed?: EkoFeedConfig,
 *         twig?: TwigConfig,
 *         sylius_theme?: SyliusThemeConfig,
 *         stof_doctrine_extensions?: StofDoctrineExtensionsConfig,
 *         liip_url_auto_converter?: LiipUrlAutoConverterConfig,
 *         knp_paginator?: KnpPaginatorConfig,
 *         knp_menu?: KnpMenuConfig,
 *         jms_translation?: JmsTranslationConfig,
 *         doctrine?: DoctrineConfig,
 *         fs_solr?: FsSolrConfig,
 *         tei_edition?: TeiEditionConfig,
 *         presta_sitemap?: PrestaSitemapConfig,
 *         security?: SecurityConfig,
 *         web_profiler?: WebProfilerConfig,
 *         twig_extra?: TwigExtraConfig,
 *         cocur_slugify?: CocurSlugifyConfig,
 *         jms_i18n_routing?: JmsI18nRoutingConfig,
 *     },
 *     ...<string, ExtensionType|array{ // extra keys must follow the when@%env% pattern or match an extension alias
 *         imports?: ImportsConfig,
 *         parameters?: ParametersConfig,
 *         services?: ServicesConfig,
 *         ...<string, ExtensionType>,
 *     }>
 * }
 */
final class App
{
    /**
     * @param ConfigType $config
     *
     * @psalm-return ConfigType
     */
    public static function config(array $config): array
    {
        /** @var ConfigType $config */
        $config = AppReference::config($config);

        return $config;
    }
}

namespace Symfony\Component\Routing\Loader\Configurator;

/**
 * This class provides array-shapes for configuring the routes of an application.
 *
 * Example:
 *
 *     ```php
 *     // config/routes.php
 *     namespace Symfony\Component\Routing\Loader\Configurator;
 *
 *     return Routes::config([
 *         'controllers' => [
 *             'resource' => 'routing.controllers',
 *         ],
 *     ]);
 *     ```
 *
 * @psalm-type RouteConfig = array{
 *     path: string|array<string,string>,
 *     controller?: string,
 *     template?: string,
 *     redirect_to_route?: string,
 *     redirect_to?: string,
 *     methods?: string|list<string>,
 *     requirements?: array<string,string>,
 *     defaults?: array<string,mixed>,
 *     options?: array<string,mixed>,
 *     host?: string|array<string,string>,
 *     schemes?: string|list<string>,
 *     condition?: string,
 *     add_condition?: string,
 *     locale?: string,
 *     format?: string,
 *     utf8?: bool,
 *     stateless?: bool,
 *     firewall?: string,
 * }
 * @psalm-type ImportConfig = array{
 *     resource: string,
 *     type?: string,
 *     exclude?: string|list<string>,
 *     prefix?: string|array<string,string>,
 *     name_prefix?: string,
 *     trailing_slash_on_root?: bool,
 *     controller?: string,
 *     methods?: string|list<string>,
 *     requirements?: array<string,string>,
 *     defaults?: array<string,mixed>,
 *     options?: array<string,mixed>,
 *     host?: string|array<string,string>,
 *     schemes?: string|list<string>,
 *     condition?: string,
 *     add_condition?: string,
 *     locale?: string,
 *     format?: string,
 *     utf8?: bool,
 *     stateless?: bool,
 *     firewall?: string,
 * }
 * @psalm-type AliasConfig = array{
 *     alias: string,
 *     deprecated?: array{package:string, version:string, message?:string},
 * }
 * @psalm-type RoutesConfig = array{
 *     "when@dev"?: array<string, RouteConfig|ImportConfig|AliasConfig>,
 *     "when@prod"?: array<string, RouteConfig|ImportConfig|AliasConfig>,
 *     "when@test"?: array<string, RouteConfig|ImportConfig|AliasConfig>,
 *     ...<string, RouteConfig|ImportConfig|AliasConfig>
 * }
 */
final class Routes
{
    /**
     * @param RoutesConfig $config
     *
     * @psalm-return RoutesConfig
     */
    public static function config(array $config): array
    {
        return $config;
    }
}
