# frozen_string_literal: true

require 'autoprefixer-rails'
require 'rubocop/rake_task'
require 'logger'

$stdout.sync = $stderr.sync = true

# Logger
logger = Logger.new($stdout)
logger.datetime_format = '%F %T %:z'
logger.formatter = proc do |severity, datetime, _progname, msg|
  "#{datetime} | #{severity} | #{msg}\n"
end

# Tests
RuboCop::RakeTask.new

namespace :build do
  files = Dir.glob('styles/**/theme/css/*.css')

  # Base build
  task :base, [:opts] do |_t, args|
    args[:opts][:output] = args[:opts][:input] unless args[:opts].key?(:output)
    args[:opts][:output] += '.tmp' if args[:opts][:output].eql?(args[:opts][:input])

    logger.info(format('Processing file: %<filename>s', filename: args[:opts][:input]))

    File.open(args[:opts][:output], 'w') do |f|
      css = File.read(args[:opts][:input])

      f.puts AutoprefixerRails.process(
        css,
        map: false,
        cascade: false,
        from: args[:opts][:input],
        to: args[:opts][:output],
        browsers: [
          '>= 1%',
          'last 1 major version',
          'not dead',
          'Chrome >= 45',
          'Firefox >= 38',
          'Edge >= 12',
          'Explorer >= 10',
          'iOS >= 9',
          'Safari >= 9',
          'Android >= 4.4',
          'Opera >= 30'
        ]
      ).css

      if args[:opts][:output].index(/\.tmp$/).to_i.positive?
        logger.warn(format('Overwriting file: %<filename>s', filename: args[:opts][:input]))
        File.delete(args[:opts][:input])
        File.rename(args[:opts][:output], args[:opts][:input])
      end
    end
  end

  desc 'Build CSS files'
  task :css do
    files.each do |file|
      Rake::Task['build:base'].reenable
      Rake::Task['build:base'].invoke(
        input: file,
        style: :expanded
      )
    end
  end

  desc 'Build all CSS files'
  task :all do
    Rake::Task['build:css'].invoke
  end
end
