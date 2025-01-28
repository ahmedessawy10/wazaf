<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Programming Languages
            ['name' => 'PHP'],
            ['name' => 'Python'],
            ['name' => 'JavaScript'],
            ['name' => 'Java'],
            ['name' => 'C#'],
            ['name' => 'C++'],
            ['name' => 'Ruby'],
            ['name' => 'Go'],
            ['name' => 'Swift'],
            ['name' => 'Kotlin'],
            ['name' => 'TypeScript'],
            ['name' => 'Rust'],
            ['name' => 'Dart'],

            // Frameworks
            ['name' => 'Laravel'],
            ['name' => 'Django'],
            ['name' => 'Flask'],
            ['name' => 'Spring Boot'],
            ['name' => 'Express.js'],
            ['name' => 'Vue.js'],
            ['name' => 'React.js'],
            ['name' => 'Angular'],
            ['name' => 'Svelte'],
            ['name' => 'Ruby on Rails'],
            ['name' => 'Flutter'],
            ['name' => 'React Native'],

            // Databases
            ['name' => 'MySQL'],
            ['name' => 'PostgreSQL'],
            ['name' => 'MongoDB'],
            ['name' => 'SQLite'],
            ['name' => 'Redis'],
            ['name' => 'Cassandra'],
            ['name' => 'Elasticsearch'],
            ['name' => 'Firebase'],

            // DevOps Tools
            ['name' => 'Docker'],
            ['name' => 'Kubernetes'],
            ['name' => 'Terraform'],
            ['name' => 'Ansible'],
            ['name' => 'Jenkins'],
            ['name' => 'GitLab CI/CD'],
            ['name' => 'GitHub Actions'],
            ['name' => 'AWS'],
            ['name' => 'Azure'],
            ['name' => 'Google Cloud Platform (GCP)'],
            ['name' => 'Heroku'],

            // Version Control
            ['name' => 'Git'],
            ['name' => 'SVN'],

            // Operating Systems
            ['name' => 'Linux'],
            ['name' => 'Windows'],
            ['name' => 'MacOS'],
            ['name' => 'Ubuntu'],
            ['name' => 'CentOS'],
            ['name' => 'Fedora'],
            ['name' => 'Debian'],

            // Testing Tools
            ['name' => 'Jest'],
            ['name' => 'Mocha'],
            ['name' => 'Cypress'],
            ['name' => 'Selenium'],
            ['name' => 'PHPUnit'],
            ['name' => 'Pytest'],

            // Other Tools
            ['name' => 'VS Code'],
            ['name' => 'IntelliJ IDEA'],
            ['name' => 'Postman'],
            ['name' => 'Swagger'],
            ['name' => 'Jira'],
            ['name' => 'Trello'],
            ['name' => 'Slack'],
            ['name' => 'Figma'],
            ['name' => 'Adobe XD'],
            ['name' => 'Hr'],
            ['name' => 'Figma'],
            ['name' => 'Data science'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
