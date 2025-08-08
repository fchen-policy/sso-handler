# FusionAuth SSO Handler

## Setup

1. **Start FusionAuth locally** (default: http://localhost:9011)

2. **Create an Application in FusionAuth:**
   - Go to Applications → Add
   - Set OAuth redirect URI: `http://localhost:8000/sso-callback.php`
   - Enable OAuth and OpenID Connect
   - Copy the Client ID and Client Secret

3. **Update config.php** with your FusionAuth credentials:
   ```php
   'client_id' => 'your-actual-client-id',
   'client_secret' => 'your-actual-client-secret',
   ```

4. **Start PHP server:**
   ```bash
   php -S 0.0.0.0:8000
   ```

5. **Test:** Visit http://localhost:8000/sso-login.php

## OAuth2/OpenID Connect Endpoints
- Authorization: `http://localhost:8000/authorize.php`
- Token: `http://localhost:8000/token.php`
- UserInfo: `http://localhost:8000/userinfo.php`

## Integrated with Local Fusionauth SSO
- Go to http://auth.policyreporter.priv:9011/admin/identity-provider/
- Add `OpenID Connect`
- Set `Client ID` and `Client Secret` to anything, we don't validate it
- Set `Authorization endpoint` to `http://localhost:8000/authorize.php`
- Set `Token endpoint` to `http://host.docker.internal:8000/token.php`
- Set `Userinfo endpoint` to `http://host.docker.internal:8000/userinfo.php`
- Set `Scope` to `openid email profile`
- Enable Debug
- Enable the Application that need SSO

## Files
- `sso-login.php` - Login page with SSO button
- `sso-callback.php` - Handles OAuth callback
- `dashboard.php` - Protected page showing user info
- `logout.php` - Clears session
- `config.php` - FusionAuth configuration with endpoints
