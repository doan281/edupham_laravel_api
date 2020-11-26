<?php

namespace Edupham\Api\App\Helpers;

class Constants
{
    const NAME_SPACE = 'Edupham\Api';

    const TABLE_API_LOGS = 'api_logs';
    const TABLE_APP_USERS = 'app_user';
    const TABLE_APPS = 'apps';
    const TABLE_ARTISTS = 'artists';
    const TABLE_BIRTHDAY_LOG = 'birthday_log';
    const TABLE_BIRTHDAYS = 'birthdays';
    const TABLE_CAMPAIGNS = 'campaigns';
    const TABLE_CHANNELS = 'channels';
    const TABLE_COMPANIES = 'companies';
    const TABLE_COURSES = 'courses';
    const TABLE_CRONTJOBS = 'crontjobs';
    const TABLE_DISTRICTS = 'districts';
    const TABLE_FAILED_JOBS = 'failed_jobs';
    const TABLE_GROUPS = 'groups';
    const TABLE_JOBS = 'jobs';
    const TABLE_MESSAGE_LOGS = 'message_logs';
    const TABLE_MESSAGES = 'messages';
    const TABLE_MIGRATIONS = 'migrations';
    const TABLE_MUSIC_TOPICS = 'music_topics';
    const TABLE_NOTIFICATIONS = 'notifications';
    const TABLE_OAUTH_ACCESS_TOKENS = 'oauth_access_tokens';
    const TABLE_OAUTH_AUTH_CODES = 'oauth_auth_codes';
    const TABLE_OAUTH_CLIENTS = 'oauth_clients';
    const TABLE_OAUTH_PERSONAL_ACCESS_CLIENTS = 'oauth_personal_access_clients';
    const TABLE_OAUTH_REFRESH_TOKENS = 'oauth_refresh_tokens';
    const TABLE_PASSWORD_RESETS = 'password_resets';
    const TABLE_PERMISSION_USER = 'permission_user';
    const TABLE_PERMISSIONS = 'permissions';
    const TABLE_POSITIONS = 'positions';
    const TABLE_PROJECT_USER = 'project_user';
    const TABLE_PROJECTS = 'projects';
    const TABLE_PROVINCES = 'provinces';
    const TABLE_ROLE_USER = 'role_user';
    const TABLE_ROLES = 'roles';
    const TABLE_SMTPS = 'smtps';
    const TABLE_TASKS = 'tasks';
    const TABLE_TEMPLATES = 'templates';
    const TABLE_TRACK_ARTIST = 'track_artist';
    const TABLE_TRACKS = 'tracks';
    const TABLE_UNITS = 'units';
    const TABLE_USER_LOGS = 'user_logs';
    const TABLE_USERS = 'users';
    const TABLE_WARDS = 'wards';
    const TABLE_ZONES = 'zones';

    const USER_STATUS_INACTIVE = 0;
    const USER_STATUS_ACTIVE = 1;
    const USER_STATUS_LOCKED = 2;
    const USER_STATUS_LEFT = 3;

    const DB_NO_CONNECTION = 2002;
    const SYSTEM_ERROR = -500;
    const ACCESS_DENIED = 403;
    const KILL_MYSELF = 'KILL_MYSELF';
    const SYSTEM_MAINTENANCE = 503;

    const CODE_SUCCESS    = 0;
    const CODE_ERROR      = 1;
    const CODE_EMPTY      = 2;

    const MESSAGE_SUCCESS = 'success';
    const MESSAGE_ERROR   = 'error';
    const MESSAGE_EMPTY   = 'empty';

    const BIRTHDAY_STATUS_NEW = 0;
    const BIRTHDAY_STATUS_PROCESSING = 1;
    const BIRTHDAY_STATUS_SUCCESS = 2;
    const BIRTHDAY_STATUS_FAILED = 3;
    const BIRTHDAY_STATUS_SUCCESS_AGAIN = 4;
    const BIRTHDAY_STATUS_CANCEL = 5;

    const BIRTHDAY_CHANNEL_CODE_SMS = 'SMS';
    const BIRTHDAY_CHANNEL_CODE_EMAIL = 'EMAIL';
    const BIRTHDAY_CHANNEL_CODE_EMAIL_SMS = 'EMAIL_SMS';
    const CHANNEL_CODE_DEFAULT = 'EMAIL';
    const EMAIL_CONTENT_DEFAULT = 'Hi! Thay mặt Công Đoàn Công ty DCV, tôi xin gửi lời chúc sinh nhật vui vẻ, thành công và hạnh phúc tới đồng chí. Chúc đồng chí luôn hoàn thành tốt nhiệm vụ!';
    const SMS_CONTENT_DEFAULT = '(DCV - CONG DOAN) Thay mat Cong Doan Cong ty DCV, chuc Ban sinh nhat VUI VE.';

    /* Cấu hình khoảng giá trị sinh mã bảo mật */
    const VERIFICATION_CODE_MIN = 100000;
    const VERIFICATION_CODE_MAX = 999999;

    /* Cấu hình thời gian bắt đầu gửi chúc mừng sinh nhật */
    const BIRTHDAY_START_SEND_HOUR = '09';
    const BIRTHDAY_START_SEND_MINUTE = '00';
    const BIRTHDAY_START_SEND_SECOND = '00';

    const BIRTHDAY_EMAIL_TEMPLATE_FILENAME = 'mail_birthday.html';
    const BIRTHDAY_EMAIL_TEMPLATE_FROM_PUBLIC = 'storage/templates/mail/';
    const BIRTHDAY_EMAIL_TEMPLATE_FROM_STORAGE = 'app/public/templates/mail/';

    /* Backend view path */
    const BE_VIEW_PATH_DASHBOARD = 'pages.backend.dashboard.index';

    /* Tên Tab ứng dụng extension PMS */
    const BROWSER_TYPE_NOTIFICATION = 'NOTIFICATION';
    const BROWSER_TYPE_PROJECT = 'PROJECT';
    const BROWSER_TYPE_TASK = 'TASK';
    const BROWSER_TYPE_COWORKER = 'COWORKER';

    /* Tên Tab ứng dụng extension SmartJob */
    const SMARTJOB_TYPE_JOBS = 'JOBS';
    const SMARTJOB_TYPE_COMPANIES = 'COMPANIES';
    const SMARTJOB_TYPE_BLOG = 'BLOG';

    /* Tên Tab ứng dụng extension AHoaDon */
    const AHOADON_TYPE_SEARCH = 'SEARCH';
    const AHOADON_TYPE_PACKAGE = 'PACKAGE';
    const AHOADON_TYPE_TEMPLATE = 'TEMPLATE';

    const AHOADON_PRICE_INIT = 500000;
    const AHOADON_VAT = 10;

    const STORAGE_OPENWEATHERMAP_ICON = 'storage/weather/openweathermap';
    const STORAGE_COURSE_ICON = 'storage/courses';

    const STORAGE_IMG_TRACKS_DB = 'storage/tracks/images/';
    const STORAGE_IMG_TRACKS = 'storage/app/public/tracks/images/';
    const STORAGE_IMG_EMPTY_PNG = 'storage/app/public/empty-1x1-png.png';
    const STORAGE_IMG_EMPTY_JPG = 'storage/app/public/empty-1x1-jpg.jpg';
    const STORAGE_IMG_EMPTY_GIF = 'storage/app/public/empty-1x1-gif.gif';

    const STORAGE_FILE_TRACKS_DB = 'storage/tracks/files/';
    const STORAGE_FILE_TRACKS = 'storage/app/public/tracks/files/';

    const STORAGE_COVER_ARTISTS_DB = 'storage/artists/covers/';
    const STORAGE_COVER_ARTISTS = 'storage/app/public/artists/covers/';

    const STORAGE_THUMBNAIL_ARTISTS_DB = 'storage/artists/thumbnails/';
    const STORAGE_THUMBNAIL_ARTISTS = 'storage/app/public/artists/thumbnails/';
}