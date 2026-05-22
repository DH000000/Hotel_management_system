<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



TripLodge-Universe/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   │   ├── AdminDashboardController.php
│   │   │   │   ├── HotelApprovalController.php
│   │   │   │   ├── UserManagementController.php
│   │   │   │   ├── OTAMonitoringController.php
│   │   │   │   ├── SettlementController.php
│   │   │   │   ├── FraudDetectionController.php
│   │   │   │   └── SupportTicketController.php
│   │   │   │
│   │   │   ├── Auth/
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   ├── EmailVerificationController.php
│   │   │   │   └── TwoFactorController.php
│   │   │   │
│   │   │   ├── Hotel/
│   │   │   │   ├── HotelDashboardController.php
│   │   │   │   ├── OnboardingController.php
│   │   │   │   ├── RoomController.php
│   │   │   │   ├── InventoryController.php
│   │   │   │   ├── RateController.php
│   │   │   │   ├── BookingController.php
│   │   │   │   ├── OTAChannelController.php
│   │   │   │   ├── RevenueController.php
│   │   │   │   └── ReportController.php
│   │   │   │
│   │   │   ├── Guest/
│   │   │   │   ├── HomeController.php
│   │   │   │   ├── AboutController.php
│   │   │   │   ├── ContactController.php
│   │   │   │   ├── PricingController.php
│   │   │   │   ├── BlogController.php
│   │   │   │   └── BookingEngineController.php
│   │   │   │
│   │   │   ├── API/
│   │   │   │   ├── V1/
│   │   │   │   │   ├── HotelAPIController.php
│   │   │   │   │   ├── BookingAPIController.php
│   │   │   │   │   ├── RateAPIController.php
│   │   │   │   │   ├── InventoryAPIController.php
│   │   │   │   │   └── OTAWebhookController.php
│   │   │   │   └── V2/
│   │   │   │
│   │   │   └── Staff/
│   │   │       ├── StaffDashboardController.php
│   │   │       ├── CheckinController.php
│   │   │       ├── CheckoutController.php
│   │   │       └── MaintenanceController.php
│   │   │
│   │   ├── Middleware/
│   │   │   ├── AdminMiddleware.php
│   │   │   ├── HotelOwnerMiddleware.php
│   │   │   ├── StaffMiddleware.php
│   │   │   ├── VerifiedHotelMiddleware.php
│   │   │   └── OTAApiMiddleware.php
│   │   │
│   │   ├── Requests/
│   │   │   ├── Auth/
│   │   │   │   ├── LoginRequest.php
│   │   │   │   ├── RegisterRequest.php
│   │   │   │   └── ForgotPasswordRequest.php
│   │   │   │
│   │   │   ├── Hotel/
│   │   │   │   ├── HotelRegistrationRequest.php
│   │   │   │   ├── RoomCreateRequest.php
│   │   │   │   ├── InventoryUpdateRequest.php
│   │   │   │   └── RateUpdateRequest.php
│   │   │   │
│   │   │   └── Admin/
│   │   │       ├── HotelApprovalRequest.php
│   │   │       └── UserCreateRequest.php
│   │   │
│   │   └── Traits/
│   │       ├── ApiResponseTrait.php
│   │       ├── FileUploadTrait.php
│   │       ├── NotificationTrait.php
│   │       └── SyncTrait.php
│   │
│   ├── Models/
│   │   ├── User.php
│   │   ├── Hotel.php
│   │   ├── HotelKyc.php
│   │   ├── HotelBankDetail.php
│   │   ├── HotelPolicy.php
│   │   ├── HotelAmenity.php
│   │   ├── RoomType.php
│   │   ├── Room.php
│   │   ├── RoomImage.php
│   │   ├── RatePlan.php
│   │   ├── DailyRate.php
│   │   ├── InventoryCalendar.php
│   │   ├── OtaChannel.php
│   │   ├── HotelChannelConnection.php
│   │   ├── RoomChannelMapping.php
│   │   ├── RateChannelMapping.php
│   │   ├── Booking.php
│   │   ├── BookingGuest.php
│   │   ├── Payment.php
│   │   ├── Settlement.php
│   │   ├── Commission.php
│   │   ├── Refund.php
│   │   ├── Invoice.php
│   │   ├── Guest.php
│   │   ├── Review.php
│   │   ├── SyncLog.php
│   │   ├── SyncError.php
│   │   ├── Notification.php
│   │   ├── Role.php
│   │   ├── Permission.php
│   │   ├── AuditLog.php
│   │   ├── AiPricingSuggestion.php
│   │   ├── RateParityLog.php
│   │   ├── SupportTicket.php
│   │   └── FraudRiskScore.php
│   │
│   ├── Services/
│   │   ├── OTASync/
│   │   │   ├── OTASyncService.php
│   │   │   ├── BookingComService.php
│   │   │   ├── MakeMyTripService.php
│   │   │   ├── ExpediaService.php
│   │   │   ├── AgodaService.php
│   │   │   └── AirbnbService.php
│   │   │
│   │   ├── AI/
│   │   │   ├── PricingEngineService.php
│   │   │   ├── DemandPredictionService.php
│   │   │   ├── ContentOptimizerService.php
│   │   │   └── SentimentAnalysisService.php
│   │   │
│   │   ├── Payment/
│   │   │   ├── PaymentGatewayService.php
│   │   │   ├── RazorpayService.php
│   │   │   ├── CashfreeService.php
│   │   │   ├── CommissionCalculator.php
│   │   │   └── SettlementService.php
│   │   │
│   │   ├── Notification/
│   │   │   ├── WhatsAppService.php
│   │   │   ├── EmailService.php
│   │   │   ├── SMSService.php
│   │   │   └── PushNotificationService.php
│   │   │
│   │   ├── Automation/
│   │   │   ├── BookingWorkflowService.php
│   │   │   ├── RateAutomationService.php
│   │   │   └── InventoryAutomationService.php
│   │   │
│   │   └── Fraud/
│   │       └── FraudDetectionService.php
│   │
│   └── Jobs/
│       ├── SyncInventoryToOTA.php
│       ├── PushRatesToOTA.php
│       ├── FetchOTABookings.php
│       ├── ProcessSettlements.php
│       ├── SendWhatsAppNotification.php
│       ├── GenerateInvoice.php
│       └── CheckRateParity.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php           (Main layout)
│   │   │   ├── admin.blade.php         (Admin layout)
│   │   │   ├── hotel.blade.php         (Hotel layout)
│   │   │   ├── guest.blade.php         (Guest layout)
│   │   │   ├── partials/
│   │   │   │   ├── header.blade.php
│   │   │   │   ├── footer.blade.php
│   │   │   │   ├── sidebar.blade.php
│   │   │   │   ├── navbar.blade.php
│   │   │   │   ├── scripts.blade.php
│   │   │   │   └── styles.blade.php
│   │   │   └── components/
│   │   │       ├── alert.blade.php
│   │   │       ├── button.blade.php
│   │   │       ├── card.blade.php
│   │   │       ├── modal.blade.php
│   │   │       ├── toast.blade.php
│   │   │       ├── breadcrumb.blade.php
│   │   │       ├── pagination.blade.php
│   │   │       ├── table.blade.php
│   │   │       ├── form/
│   │   │       │   ├── input.blade.php
│   │   │       │   ├── select.blade.php
│   │   │       │   ├── textarea.blade.php
│   │   │       │   ├── checkbox.blade.php
│   │   │       │   └── radio.blade.php
│   │   │       └── charts/
│   │   │           ├── line-chart.blade.php
│   │   │           ├── bar-chart.blade.php
│   │   │           └── pie-chart.blade.php
│   │   │
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   ├── register.blade.php
│   │   │   ├── forgot-password.blade.php
│   │   │   ├── reset-password.blade.php
│   │   │   ├── verify-email.blade.php
│   │   │   └── two-factor.blade.php
│   │   │
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── hotels/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── pending.blade.php
│   │   │   │   ├── show.blade.php
│   │   │   │   └── approve.blade.php
│   │   │   ├── users/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── create.blade.php
│   │   │   │   ├── edit.blade.php
│   │   │   │   └── roles.blade.php
│   │   │   ├── ota/
│   │   │   │   ├── monitoring.blade.php
│   │   │   │   └── sync-logs.blade.php
│   │   │   ├── settlements/
│   │   │   │   └── index.blade.php
│   │   │   ├── fraud/
│   │   │   │   ├── index.blade.php
│   │   │   │   └── details.blade.php
│   │   │   └── reports/
│   │   │       ├── revenue.blade.php
│   │   │       └── bookings.blade.php
│   │   │
│   │   ├── hotel/
│   │   │   ├── dashboard/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── analytics.blade.php
│   │   │   │   └── reports.blade.php
│   │   │   ├── onboarding/
│   │   │   │   ├── step1-registration.blade.php
│   │   │   │   ├── step2-documents.blade.php
│   │   │   │   ├── step3-bank.blade.php
│   │   │   │   ├── step4-amenities.blade.php
│   │   │   │   └── step5-complete.blade.php
│   │   │   ├── rooms/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── create.blade.php
│   │   │   │   ├── edit.blade.php
│   │   │   │   └── show.blade.php
│   │   │   ├── inventory/
│   │   │   │   ├── calendar.blade.php
│   │   │   │   ├── bulk-update.blade.php
│   │   │   │   └── stop-sell.blade.php
│   │   │   ├── rates/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── dynamic-pricing.blade.php
│   │   │   │   └── ai-suggestions.blade.php
│   │   │   ├── bookings/
│   │   │   │   ├── index.blade.php
│   │   │   │   ├── details.blade.php
│   │   │   │   ├── calendar.blade.php
│   │   │   │   └── walkin.blade.php
│   │   │   ├── ota/
│   │   │   │   ├── channels.blade.php
│   │   │   │   ├── connect.blade.php
│   │   │   │   ├── mapping.blade.php
│   │   │   │   └── sync-status.blade.php
│   │   │   └── settings/
│   │   │       ├── profile.blade.php
│   │   │       ├── policies.blade.php
│   │   │       └── billing.blade.php
│   │   │
│   │   ├── guest/
│   │   │   ├── home.blade.php
│   │   │   ├── about.blade.php
│   │   │   ├── contact.blade.php
│   │   │   ├── pricing.blade.php
│   │   │   ├── features.blade.php
│   │   │   ├── how-it-works.blade.php
│   │   │   ├── blog/
│   │   │   │   ├── index.blade.php
│   │   │   │   └── show.blade.php
│   │   │   ├── booking/
│   │   │   │   ├── search.blade.php
│   │   │   │   ├── room-details.blade.php
│   │   │   │   ├── checkout.blade.php
│   │   │   │   └── confirmation.blade.php
│   │   │   └── legal/
│   │   │       ├── privacy-policy.blade.php
│   │   │       ├── terms.blade.php
│   │   │       └── refund-policy.blade.php
│   │   │
│   │   ├── staff/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── checkin/
│   │   │   │   └── index.blade.php
│   │   │   ├── checkout/
│   │   │   │   └── index.blade.php
│   │   │   └── maintenance/
│   │   │       └── rooms.blade.php
│   │   │
│   │   ├── components/
│   │   │   ├── toast-container.blade.php
│   │   │   ├── notification-bell.blade.php
│   │   │   ├── stats-card.blade.php
│   │   │   └── booking-card.blade.php
│   │   │
│   │   └── errors/
│   │       ├── 401.blade.php
│   │       ├── 403.blade.php
│   │       ├── 404.blade.php
│   │       └── 500.blade.php
│   │
│   ├── css/
│   │   ├── app.css
│   │   ├── admin.css
│   │   └── components.css
│   │
│   ├── js/
│   │   ├── app.js
│   │   ├── admin.js
│   │   ├── hotel.js
│   │   ├── components/
│   │   │   ├── toast.js
│   │   │   ├── modal.js
│   │   │   ├── datatable.js
│   │   │   └── calendar.js
│   │   └── api/
│   │       ├── hotel.js
│   │       ├── booking.js
│   │       └── sync.js
│   │
│   └── sass/
│       ├── _variables.scss
│       ├── _mixins.scss
│       ├── _components.scss
│       └── app.scss
│
├── routes/
│   ├── web.php           (Guest routes)
│   ├── admin.php         (Admin routes)
│   ├── hotel.php         (Hotel owner routes)
│   ├── staff.php         (Staff routes)
│   ├── api.php           (API routes v1)
│   ├── api_v2.php        (API routes v2)
│   ├── webhooks.php      (OTA webhooks)
│   └── channels.php      (Broadcast channels)
│
├── database/
│   ├── migrations/
│   │   └── (35+ migration files)
│   ├── seeders/
│   │   ├── DatabaseSeeder.php
│   │   ├── RolePermissionSeeder.php
│   │   ├── OTAApiSettingsSeeder.php
│   │   └── DummyHotelSeeder.php
│   └── factories/
│       ├── HotelFactory.php
│       ├── RoomFactory.php
│       └── BookingFactory.php
│
└── config/
    ├── ota.php
    ├── ai.php
    ├── payment.php
    ├── notification.php
    └── permissions.php
