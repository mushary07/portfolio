<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Jenssegers\Agent\Agent;

class PortfolioController extends Controller
{
    public $works;

    public function __construct()
    {
        $this->works = [
            [
                'id' => 1,
                'name' => "ProjectX",
                'caption' => "Multi-vendor & Delivery Platform",
                'description' => "A large-scale multi-vendor platform featuring customer apps, admin dashboards, vendor panels, websites, and delivery applications for a complete marketplace ecosystem.",
                'timeline_description' => "Started in 2024 and actively under development, ProjectX is a scalable solution connecting vendors, customers, and administrators through web and mobile platforms.",
                'about' => "Includes Customer Web App, Customer Mobile App, Vendor Panel, Vendor Website, Admin Panel, Admin Website, and Vendor Mobile App with order management, payments, and delivery tracking.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2024 – Present"],
                    ["title" => "Services", "value" => "Multi-Vendor Platform, Web & Mobile Applications"],
                ],
            ],
            [
                'id' => 2,
                'name' => "Jacees School",
                'caption' => "School Management System",
                'description' => "A web-based system to manage student enrollment, attendance, examinations, fees, and teacher administration, providing a centralized digital platform for school operations.",
                'timeline_description' => "Developed in 2024 to digitalize school workflows, Jacees School streamlines communication between teachers, students, and administrators while ensuring transparency and efficiency.",
                'about' => "The system includes modules for student management, class scheduling, attendance tracking, examinations, fee management, and reporting tools for teachers and administrators.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2024"],
                    ["title" => "Services", "value" => "School ERP, Web Application"],
                ],
            ],
            [
                'id' => 3,
                'name' => "Caesars Kids",
                'caption' => "Food Delivery App for Kids",
                'description' => "A mobile-first food delivery platform tailored for kids’ meals, with a backend CMS for administrators to manage orders, menus, and vendors.",
                'timeline_description' => "Launched in 2024, Caesars Kids focuses on healthy, fun, and convenient food delivery services with strong admin controls.",
                'about' => "The project includes a customer app for ordering meals and an admin CMS to manage restaurants, orders, delivery assignments, and menus.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2024"],
                    ["title" => "Services", "value" => "Food Delivery, Mobile App, Admin CMS"],
                ],
            ],
            [
                'id' => 4,
                'name' => "Thookuchatii",
                'caption' => "Multi-vendor & Delivery Platform",
                'description' => "Thookuchatii is a comprehensive multi-vendor delivery system designed to connect customers, vendors, administrators, and delivery personnel through a seamless and scalable platform. The system enhances order management, delivery tracking, and customer engagement, ensuring a smooth end-to-end experience.",
                'timeline_description' => "Developed and launched in 2023, Thookuchatii brings together multiple applications into a unified ecosystem. With a focus on scalability, performance, and usability, it simplifies business operations for vendors while delivering convenience and reliability to customers. The platform is continuously enhanced to support growing demands and new features.",
                'about' => "The multi-vendor delivery ecosystem consists of four interconnected applications:\n\n• Customer App: Enables users to browse products, place orders, make secure payments, and track deliveries in real time.\n• Store Panel: A web dashboard for vendors to manage inventory, process orders, and engage with customers.\n• Admin Panel: A centralized system for administrators to oversee stores, users, deliveries, and generate performance insights.\n• Delivery App: A mobile app for delivery personnel to receive and fulfill orders, optimize routes, and update delivery statuses.\n\nTogether, these modules create an efficient, scalable, and user-friendly marketplace solution.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2023"],
                    ["title" => "Services", "value" => "Multi-Vendor Delivery System, Web & Mobile Applications"],
                ],
            ],
            [
                'id' => 5,
                'name' => "Proman",
                'caption' => "Employee Management",
                'description' => "An enterprise solution built for IT company operations, focusing on employee management, task assignments, project tracking, and HR functionalities.",
                'timeline_description' => "Started in 2023 and continuously enhanced till now, Proman improves team collaboration, task transparency, and efficiency across IT operations.",
                'about' => "Proman includes modules for employee records, attendance, leave management, project assignment, payroll integration, and performance tracking.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2023 – Present"],
                    ["title" => "Services", "value" => "Employee Management, HR System, Web Application"],
                ],
            ],
            [
                'id' => 6,
                'name' => "Treatlee",
                'caption' => "Multi-SaaS Petcare Application",
                'description' => "A SaaS-based application providing pet owners and service providers with tools for appointments, health tracking, grooming, and veterinary care.",
                'timeline_description' => "Launched in 2023, Treatlee enables businesses in the petcare industry to use the platform under a multi-tenant architecture, offering flexibility and scalability.",
                'about' => "Core modules include appointment scheduling, pet medical records, service provider dashboards, customer portals, and payment integrations.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2023"],
                    ["title" => "Services", "value" => "SaaS Platform, Petcare Application"],
                ],
            ],
            [
                'id' => 7,
                'name' => "Blacksalt Website",
                'caption' => "IT Solutions",
                'description' => "A responsive website for Blacksalt, an IT solutions company, showcasing services, portfolio, and client engagement features.",
                'timeline_description' => "Designed and deployed to enhance Blacksalt’s online presence, the website integrates CMS features for easy content management.",
                'about' => "The site highlights company services, projects, case studies, and includes contact and inquiry forms integrated with admin CMS.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2023"],
                    ["title" => "Services", "value" => "Corporate Website, CMS Integration"],
                ],
            ],
            [
                'id' => 8,
                'name' => "Nonaalaighal",
                'caption' => "Reselling Appplication",
                'description' => "A mobile and web platform similar to OLX, enabling users to buy and sell second-hand products with a secure admin-controlled backend.",
                'timeline_description' => "Developed to provide a digital marketplace for resellers, Nonaalaighal features listing management, chat, and admin controls.",
                'about' => "Users can post ads, chat with buyers/sellers, and manage listings. Admin Panel provides moderation, user management, and reporting features.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2022"],
                    ["title" => "Services", "value" => "Reselling App, Marketplace Platform"],
                ],
            ],
            [
                'id' => 9,
                'name' => "Al Shafat Website",
                'caption' => "Studio Website",
                'description' => "A website platform for Al Shafat to post and manage studio works and social service initiatives using an integrated admin CMS.",
                'timeline_description' => "Developed to provide Al Shafat with an online space to share studio projects and social service activities, ensuring content is easily manageable.",
                'about' => "Features include portfolio galleries, blog-style posts, event highlights, and a backend CMS for content management.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2023"],
                    ["title" => "Services", "value" => "Portfolio Website, Admin CMS"],
                ],
            ],
            [
                'id' => 10,
                'name' => "HR Management System",
                'caption' => "Employee management",
                'description' => "A comprehensive HR system designed to simplify employee data management, attendance tracking, leave processing, and payroll operations. It enhances HR efficiency by automating repetitive tasks and providing centralized access to employee information.",
                'timeline_description' => "Developed to optimize HR workflows, the system integrates employee records, attendance, leave approvals, and payroll into a single platform. It ensures accuracy, transparency, and efficiency in managing the workforce while reducing manual errors and administrative overhead.",
                'about' => "The HR Management System consists of four core modules:\n\n• Employee Details Management: Store and manage personal, professional, and job-related employee information in one place.\n• Attendance Tracking: Record daily attendance, track working hours, and generate attendance reports.\n• Leave Approval: Streamlined process for employees to request leave, and for managers to approve or reject requests efficiently.\n• Payroll Module: Automates payroll processing with salary calculations, deductions, and payment generation, ensuring accuracy and timeliness.\n\nTogether, these modules create a reliable and efficient solution for modern HR operations.",
                'thumbnail' => "assets/images/projects/thookuchatti/thumbnail.jpeg",
                'banner-1' => "assets/images/projects/thookuchatti/banner-1.jpeg",
                'banner-2' => "assets/images/projects/thookuchatti/banner-2.jpeg",
                'banner-3' => "assets/images/projects/thookuchatti/banner-3.jpeg",
                'gallery-1' => "assets/images/projects/thookuchatti/gallery-1.jpeg",
                'gallery-2' => "assets/images/projects/thookuchatti/gallery-2.jpeg",
                'gallery-3' => "assets/images/projects/thookuchatti/gallery-3.jpeg",
                'gallery-4' => "assets/images/projects/thookuchatti/gallery-4.jpeg",
                'content' => [
                    ["title" => "Year", "value" => "2022"],
                    ["title" => "Services", "value" => "HR System, Payroll Automation, Web Application"],
                ],
            ],
        ];
    }

    /**
     * home
     *
     * @return void
     */
    public function home(Request $request)
    {
        $agent = new Agent();

        $logData = [
            'ip'        => $request->ip(),
            'method'    => $request->method(),
            'device'    => $agent->device(),
            'platform'  => $agent->platform(),
            'browser'   => $agent->browser(),
            'is_mobile' => $agent->isMobile(),
            'is_desktop'=> $agent->isDesktop(),
            'time'      => now()->toDateTimeString(),
        ];

        info('Visitor Log:', $logData);

        return view('home');
    }

    /**
     * about
     *
     * @return void
     */
    public function about()
    {
        return view('about');
    }

    /**
     * works
     *
     * @return void
     */
    public function works()
    {
        $works = $this->works;
        return view('works', compact('works'));
    }

    /**
     * work_detail
     *
     * @param  mixed $id
     * @return void
     */
    public function work_detail($id)
    {
        $works = $this->works;
        $work = collect($works)->firstWhere('id', $id);
        $minId = collect($works)->min('id');
        $maxId = collect($works)->max('id');

        return view('work-detail', compact('work', 'id', 'minId', 'maxId'));
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * credential
     *
     * @return void
     */
    public function credential()
    {
        return view('credential');
    }

    /**
     * mail
     *
     * @return void
     */
    public function mail(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('you@example.com')->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
