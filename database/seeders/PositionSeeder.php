<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create(attributes:[
            'job_description' => 'Responsible for protecting computer systems,networks, and data from cyber threats by monitoring, analyzing, and responding to security incidents.',
            'job_name'=>'Cybersecurity Analyst',
            'job_salaries'=> 10000.0,
            'requierments'=> 'bachelors degree in Computer Science or a related field, along with expertise in cybersecurity tools and principles. Analytical skills are essential for identifying and mitigating security risks.',
            'department_id'=> 1,
        ]);

        Position::create(attributes:[
            'job_description' => 'Responsible for implementing,configuring, and maintaining enterprise software systems to streamline business processes and improve efficiency across departments and functions within an organization.configuring, and maintaining enterprise software systems to streamline business processes and improve efficiency across departments and functions within an organization.',
            'job_name'=>'ERP Specialist',
            'job_salaries'=> 9000.0,
            'requierments'=> 'bachelors degree in Computer Science,Information Systems, or Business Administration, skilled in ERP systems such as SAP, Oracle, or Microsoft Dynamics, and have a deep understanding of finance, procurement, and manufacturing processes.',
            'department_id'=> 1,
        ]);
        Position::create(attributes:[
            'job_description' => 'Responsible for managing,maintaining, and securing computer networks within an organization, including network infrastructure, servers, switches, routers, firewalls, and network protocols, to ensure smooth and secure communication and connectivity for users and devices.',
            'job_name'=>'Network Administrator',
            'job_salaries'=> 7000.0,
            'requierments'=> 'bachelors degree in Computer Science,and infrastructure management, including security principles and troubleshooting. Effective communication and teamwork are crucial for collaboration with IT teams and stakeholders. Certifications like CCNA or CompTIA Network+ are advantageous.',
            'department_id'=> 1,
        ]);
        Position::create(attributes:[
            'job_description' => 'Provide expert advice and guidance on legal matters,including contracts, regulations, compliance, and risk management, to ensure legal compliance and minimize potential legal issues for individuals or organizations.',
            'job_name'=>'Legal consultant',
            'job_salaries'=> 8000.0,
            'requierments'=> 'bachelors degree in Law,They should have deep legal knowledge, strong problem-solving abilities, and excellent communication skills.',
            'department_id'=> 1,//only IT jobs examples here
        ]);

        Position::create([
            'job_description' => 'Oversee and maintain the organization\'s IT infrastructure, ensuring systems are secure, reliable, and efficient, while providing support and guidance on technical matters.',
            'job_name' => 'IT Manager',
            'job_salaries' => 9500.0,
            'requierments' => 'Bachelor\'s degree in Information Technology or related field, extensive experience in IT management, strong leadership skills, and proficiency in network and systems administration.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Develop and maintain software applications, ensuring they meet user needs and perform efficiently. Collaborate with cross-functional teams to design and implement new features.',
            'job_name' => 'Software Developer',
            'job_salaries' => 7000.0,
            'requierments' => 'Bachelor\'s degree in Computer Science or related field, proficiency in multiple programming languages, and strong problem-solving skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Analyze data to extract insights and inform business decisions. Create visualizations and reports to communicate findings to stakeholders.',
            'job_name' => 'Data Analyst',
            'job_salaries' => 6000.0,
            'requierments' => 'Bachelor\'s degree in Data Science, Statistics, or related field, strong analytical skills, and experience with data visualization tools.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Design and implement network solutions to ensure smooth and efficient operation of the organization\'s IT systems. Monitor and troubleshoot network issues.',
            'job_name' => 'Network Engineer',
            'job_salaries' => 6500.0,
            'requierments' => 'Bachelor\'s degree in Network Engineering or related field, experience with network infrastructure, and strong problem-solving skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Lead IT projects from conception to completion, ensuring they are delivered on time, within budget, and meet business requirements.',
            'job_name' => 'IT Project Manager',
            'job_salaries' => 8000.0,
            'requierments' => 'Bachelor\'s degree in Information Technology, Project Management certification (e.g., PMP), and experience managing IT projects.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Ensure the security of the organization\'s IT systems by implementing and maintaining security measures, conducting risk assessments, and monitoring for security breaches.',
            'job_name' => 'Cybersecurity Specialist',
            'job_salaries' => 7500.0,
            'requierments' => 'Bachelor\'s degree in Cybersecurity or related field, experience with security protocols, and strong analytical skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Provide technical support to users, resolving issues related to hardware, software, and network systems. Maintain documentation of support activities.',
            'job_name' => 'Technical Support Specialist',
            'job_salaries' => 5500.0,
            'requierments' => 'Bachelor\'s degree in Information Technology or related field, strong troubleshooting skills, and excellent communication skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Plan, implement, and maintain database systems to ensure data integrity, security, and availability. Perform regular database backups and recovery.',
            'job_name' => 'Database Administrator',
            'job_salaries' => 6800.0,
            'requierments' => 'Bachelor\'s degree in Information Technology or related field, experience with database management systems, and strong analytical skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Develop and implement strategies for the organization\'s IT infrastructure, ensuring alignment with business goals and objectives. Provide technical leadership and guidance.',
            'job_name' => 'Chief Information Officer (CIO)',
            'job_salaries' => 12000.0,
            'requierments' => 'Bachelor\'s degree in Information Technology or related field, extensive experience in IT leadership, and strong strategic planning skills.',
            'department_id' => 1,
        ]);

        Position::create([
            'job_description' => 'Design, develop, and maintain web applications, ensuring they are user-friendly, responsive, and secure. Collaborate with designers and other developers.',
            'job_name' => 'Web Developer',
            'job_salaries' => 6000.0,
            'requierments' => 'Bachelor\'s degree in Computer Science or related field, proficiency in web development languages (e.g., HTML, CSS, JavaScript), and strong problem-solving skills.',
            'department_id' => 1,
        ]);

    }
}
